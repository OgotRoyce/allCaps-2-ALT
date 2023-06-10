<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('Admin.Tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required|date',
            'attachments' => 'nullable|array',
            'attachments.*' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Define the allowed file types and size
        ]);

        // Create a new Task instance
        $task = Task::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'due_date' => $request->get('due_date'),
        ]);

        // Handle file uploads
        if ($request->hasFile('attachments')) {
            $attachments = $request->file('attachments');
            $attachmentPaths = [];

            foreach ($attachments as $attachment) {
                $path = $attachment->store('attachments'); // Store the file in the "attachments" disk
                $attachmentPaths[] = $path;
            }

            $task->attachments = $attachmentPaths;
        }

        $task->save();

        Session::flash('success', 'Task created!');
        return redirect()->route('tasks-admin');
    }

    /**
     * Display the specified resource.
     */
    public function show($taskId)
    {
        $task = Task::find($taskId);
        return view('Admin.Tasks.view', compact('task'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);

        return view('Admin.Tasks.edit', compact('task'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);

        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->due_date = $request->input('due_date');

        // Handle file upload logic for attachments if necessary

        $task->save();

        Session::flash('success', 'Task updated!');
        return redirect()->route('tasks-admin');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

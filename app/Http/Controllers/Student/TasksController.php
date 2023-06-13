<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Activity;
use App\Models\Output;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Str;

class TasksController extends Controller
{
    public function index()
    {
 
        $tasks = Task::all();
        $acts = Activity::all();
       
    
        return view('Student.Task.index', ['tasks' => $tasks, 'acts' => $acts, ]);
    }
    

    public function show($taskId)
    {
        $user = auth('student')->user();
        $userAccountCode = $user->account_code;
      
        $acts = Activity::findOrFail($taskId);
        $taskCode = $acts->task_code;
        $accout = Output::where([
            ['student_id', $userAccountCode],
            ['task_code', $taskCode],
        ])->get();
        // dd($taskCode);
        return view('Student.Task.view', ['acts' => $acts, 'accout' => $accout, 'taskCode' => $taskCode]);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'attachments' => 'nullable|array',
            'attachments.*' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // Define the allowed file types and size
        ]);

               // file upload
               if ($request->hasFile('attachments')) {
                $attachmentPaths = [];
            
                foreach ($request->file('attachments') as $attachment) {
                    if ($attachment->isValid()) {
                        $originalFileName = $attachment->getClientOriginalName();
                        $fileName = $originalFileName . '_' . uniqid() . '.' . $attachment->extension();
                        $attachment->move(public_path('file'), $fileName);
                        $attachmentPaths[] = $fileName;
                    }
                }
            
                $attachments = implode(',', $attachmentPaths); // Convert array to comma-separated string
            } else {
                //   dd('Invalid file');
                $attachments = ''; // Assign an empty string if no attachments
            }
                // Create a new Task instance
                $task = Output::create([
                    'student_id' =>  $request->get('student_id'),
                    'first_name' =>  $request->get('first_name'),
                    'last_name' =>  $request->get('last_name'),
                    'adviser_id' =>  $request->get('adviser_id'),
                    'task_code' => $request->get('task_code'),
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'due_date' => $request->get('due_date'),
                    'attachments' => $attachments,
                ]);
                
                // dd($task);

                Session::flash('success', 'Task created!');
                return back();
    }


}

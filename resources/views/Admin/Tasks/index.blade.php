@extends('layouts.admin')
<style>
    .header {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        color: #f06548;
        display: flex;
        /* add this to enable flexbox */
        align-items: center;
        /* add this to center items vertically */
    }

    .header i {
        margin-right: 10px;
        /* adjust this value to increase/decrease the space */
    }

    .header-line {
        height: 1px;
        background-color: #bfbfbf;
        margin-bottom: 20px;
    }

    :root {
        --bg: transparent;
        --header: #fbf4f6;
        --text: #2e2e2f;
        --white: #ffffff;
        --light-grey: #c4cad3;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        color: var(--text);
    }

    @mixin display {
        display: flex;
        align-items: center;
    }

    .app {
        background-color: var(--bg);
        width: 100%;
        min-height: 100vh;
    }

    h1 {
        font-size: 30px;
    }

    .project {
        padding: 2rem;
        display: inline-block;
        /* border: 1px solid #bfbfbf; */
        background: #fff;
        width: 100%;
        border-radius: 18px;
        margin-bottom: 20px;
    }


    .project-info {
        padding: 2rem 0;
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .project-tasks {
        display: flex;
        align-items: center;
        /* add this to center items vertically */
        margin-bottom: 1rem;
        /* adjust this value as needed */
        width: 100%;
        grid-column-gap: 1.5rem;
    }

    .task-img {
        margin-right: 0.5rem;
        /* adjust this value to increase/decrease the space between the icon and the text */
        font-size: 3rem;
        /* adjust this value to change the size of the icon */
        color: #ff6600;
    }

    .project-column {

        &-heading {
            margin-bottom: 1rem;
            display;
            justify-content: space-between;

            &__title {
                font-size: 20px;

            }
        }
    }

    .project-column-header {
        margin-bottom: 1rem;
        justify-content: space-between;

        &__title {
            font-size: 20px;

        }
    }

    .project-column-header__title {
        color: #212529;
        font-weight: 700;
    }

    .project-column-header__link:hover {
        text-decoration: underline;
    }

    .project-column-header__link {
        cursor: pointer;
    }

    .task-stats {
        display: flex;
        align-items: center;
    }

    .task-icon {
        margin-right: 5px;
    }

    date {
        margin-right: 25px;
    }

    .task-icon,
    date {
        color: #c4bfbf;
    }

    .task-file {
        margin-right: 5px;
    }

    .task-file-count {
        margin-right: 25px;
        color: #c4bfbf;
    }

    .task-file,
    .task-file-count {
        color: #c4bfbf !important;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="live-preview">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="header mt-2"><i class="fas fa-list"></i> Tasks
                            <span class="badge badge-secondary"><span style="font-weight: 300; color: #bfbfbf;">List of
                                    complete and pending tasks</span>
                        </h5>
                        <a href="{{ route('create-tasks') }}">
                            <button type="button" style="width:100%" class="btn btn-outline-danger float-right">+ Create
                                New Task</button>
                        </a>
                    </div>
                    @foreach ($tasks as $item)
                        <div class='app'>
                            <main class='project'>
                                <div class='project-tasks'>
                                    <i class="task-img fas fa-clipboard-list"></i>
                                    <div class='project-column'>
                                        <a href="{{ route('view-tasks') }}" class="project-column-header__link">
                                            <h2 class='project-column-header__title'>{{ $item->title }}</h2>
                                        </a>
                                        <div class='task'>
                                            <p>Due Date: {{ \Carbon\Carbon::parse($item->due_date)->format('F d, Y') }}</p>
                                            <div class='task-stats'>
                                                <span>
                                                    <date datetime="2021-11-24T20:00:00"><i
                                                            class="task-icon fas fa-flag"></i>Date Posted:
                                                        {{ \Carbon\Carbon::parse($item->created_at)->format('F d, Y') }}</date>
                                                </span>
                                                <!-- <span class="task-file-count"><i
                                                        class="task-file fas fa-paperclip"></i>2</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection

@extends('layouts.member')

<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

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

    /* Profile Content */
    .profile-content {
        padding: 20px;
        background: #fff;
        border-radius: 18px;
        height: auto;
    }

    .profile-content:hover {
        background: #fff;
        cursor: pointer;
        box-shadow: -2px 3px 12px #d1d1d1;
        transform: scale(1.05);
    }

    .profile-project-head {
        color: #f06548;
        font-size: 32px;
        font-weight: 600;
        margin-top: 10px;
        font-size: 30px;
        margin-bottom: 10px;
        margin-left: 20px;
    }

    .project-container {
        margin-top: 10px;
        margin-left: 20px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .project-img {
        margin-right: 20px;
    }

    .app-logo {
        max-height: 100px;
        object-fit: cover;
        border-radius: 999px;
        border-color: #c4bfbf !important;
        border: 1px solid;
    }

    .card-content {
        text-align: left;
        overflow: hidden;
        /* add this */
        flex-grow: 1;
    }


    .project-title {
        margin-top: 0px;
        font-weight: 700;
        font-size: 24px !important;
    }

    .project-title a {
        color: #000;
        text-decoration: none !important;
    }

    .project-title a:hover {
        color: #f06548;
        text-decoration: none !important;
    }

    .project-subtitle {
        font-size: 14px;
        color: #999;
        margin-top: 1 px;
    }
</style>

@section('content')
    {{-- <div class="container-fluid">
        <div class="live-preview">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="header mt-2"><i class="fas fa-folder-open"></i> My Projects </h5>
                    </div>

                    <div class="header-line"></div>
                    <div>
                    </div>
                </div>
            </div> --}}


    <div class="container-fluid">
        <div class="live-preview">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="header mt-2"><i class="fas fa-folder-open"></i>My Projects </h5>
                        <a href="{{ route('create-project') }}">
                            <button type="button" style="width:100%" class="btn btn-outline-danger float-right">+ Add
                                Project</button>
                        </a>
                    </div>
                    <div class="header-line"></div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($projects as $item)
        <div class="container-fluid">
            <div class="live-preview">
                <div>
                    <div class="col-md-9">
                        <a href="#">
                            <div class="profile-content">
                                <div class="profile-project-details">
                                    <div class="project-container">
                                        <div class="project-img">
                                            @if ($item->logo)
                                                <img class="app-logo" src="{{ asset('public/images/' . $item->logo) }}">
                                            @else
                                                <img src="{{ asset('public/images/no_image.jpg') }}"
                                                    class="img-thumbnail default">
                                            @endif
                                            <div class="card-content">
                                                <h4 class="project-title">{{ $item->title }}</h4>
                                                <div class="project-subtitle">
                                                    <p>{{ $item->description }}</p>
                                                    <p style="font-size: 12px; color: #666;">Developed by Michael
                                                        Jaskcon
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@extends('layouts.member')
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
                    </div>
                    <div class="header-line"></div>
                    <div>
                        <div class="card p-4 border mt-4">
                            <div class="row">
                                <h5>Tasks page is Working</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection

@extends('layouts.admin')

<style>

.task-head {
        /* color: #f06548; */
        color: #fbfbf;
        font-size: 32px;
        font-weight: 300;
        margin-top: 10px;
        margin-left: 20px;
    }

    .header-line {
        height: 1px;
        background-color: #bfbfbf;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
@section('content')

<div class="modal-header">
        <div class="col">
            <a href="{{ route('usertype') }}">
                <button type="button" class="btn btn-outline-danger">Back</button>
            </a>
        </div>
        <div class="col text-end">
            <h5 class="task-head mt-2">Add Adviser</h5>
        </div>
    </div>

    <div class="header-line"></div>
            <form action="" method="post" enctype="multipart/form-data" class="row g-3">
                {!! csrf_field() !!}

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ old('name') }}" >
                </div>
                <div class="">
                    <label for="formFile" class="form-label">Email</label>
                    <input type="email" name="email"  class="form-control" value="{{ old('email') }}" id="exampleFormControlInput1">
                </div>
                <div class="">
                    <label for="exampleFormControlInput1" class="form-label">Role</label>
                    <input type="email" name="role"  class="form-control" value="Adviser" id="exampleFormControlInput1" readonly>
                </div>

                <div class="">
                    <label for="formFile" class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control" id="exampleFormControlInput1">
                </div>

                    <!-- ito yung picture upload function, place holder lang muna  -->
                <div class="">
                    <label for="formFile" class="form-label">Select Profile Photo:</label>
                    <input type="file" name="logo" step="any" class="form-control">
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-danger w-100">Create</button>
                </div>
            </form>

@endsection
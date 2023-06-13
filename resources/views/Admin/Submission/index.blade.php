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
        margin-bottom: 40px;
    }

    .back-btn {
        /* margin-bottom: 20px; */
    }

    .edit-btn {
        color: #c4bfbf !important;
        font-size: 1.5rem !important;
    }

    /* style of table */
    .table-card {
        margin-top: 20px;
        background: #fff;
        border-radius: 10px;
    }


    thead {
        background-color: #f7f6f6;
        
    }

</style>

@section('content')
    <div class="container-fluid">
        <div class="modal-header row align-items-center">
            <div class="col">
                <a href="{{ route('tasks_admin') }}">
                    <button type="button" class="btn back-btn btn-outline-danger">Back</button>
                </a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="header mt-2"><i class="fas fa-file me-2"></i> Submissions </h5>
            </div>
            <div class="header-line"></div>

          <div class="container-fluid">
            <div class="row table-card">
                <table class="table">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Date submitted</th>
                    <th>Status</th>
                    <th class="col-sm-2">Attachment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>Royce Ogot</td>
                    <td>June 13, 2023</td>
                    <td>Reviewed</td>
                    <td>
                        <a class="btn btn-danger" href="#">View</a>
                    </td>
                    </tr>
                    <tr>
                        <td>Jerome Pangan</td>
                        <td>June 13, 2023</td>
                        <td>Pending</td>
                        <td>
                            <a class="btn btn-danger" href="#">View</a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
@endsection

@extends('layouts.admin')

<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

<style>
.header {
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  color: #f06548;
  display: flex; /* add this to enable flexbox */
  align-items: center; /* add this to center items vertically */
}

.header i {
  margin-right: 10px; /* adjust this value to increase/decrease the space */
}

.header-line {
  height: 1px;
  background-color: #bfbfbf;
  margin-bottom: 20px;
}

.btn-primary {
    background-color: #f06548;
}

.btn i {
  border-radius: 50%;
  padding: 6px;
}

.square-btn {
  width: 35px;
  height: 35px;
  padding: 0 !important;
  display: flex;
  justify-content: center;
  align-items: center;
}

.square-btn i {
  font-size: 16px;
  line-height: 1;
}

.d-flex > .d-inline-block:first-child {
    margin-right: 5px;
 }

.d-flex > .d-inline-block:last-child {
    margin-left: 5px;
}

.my-btn {
  background-color: #e9ebec !important;
  border-color: #e9ebec !important;
}

.my-btn i {
  color: #424242;
}


</style>

@section('content')
  <div class="container-fluid">
    <div class="live-preview">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center">
                <h5 class="header mt-2"><i class="fas fa-users"></i> Advisers </h5> 
                <a href="{{ route('create-member') }}">
              <button type="button" style="width:100%" class="btn btn-outline-danger float-right">+ Add Adviser</button>
            </a>
          </div>
            <div class="header-line"></div>
        </div>
      </div>  

      <div class="card p-4 border mt-4">
        <div class="row">
          <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Profile Photo</th> <!-- new column -->
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <!-- <th scope="col">Mobile Mobile</th> -->
                        <th scope="col">Email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>


              <tbody>
                @php $count = ($members->currentPage() - 1) * $members->perPage() + 1; @endphp
                @foreach ($members as $item)
                  <tr>
                    <th scope="row">{{ $count++ }}</th>
                    <td>
                        @if($item->photo)
                        <img src="{{ asset('public/images/'.$item->photo) }}" class="img-thumbnail" style="width:100px;">
                        @else
                            <img src="{{ asset('images/no_image.jpg') }}" class="img-thumbnail default" style="width:100px;">
                        @endif
                    </td>                    
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <!-- <td>{{ $item->mobile_number }}</td> -->
                    <td>{{ $item->email }}</td>
                    <td>
                      <div class="d-flex">
                        <div class="d-inline-block">
                          <a href="{{ route('edit-member', $item->customer_id) }}" class="btn my-btn btn-sm d-flex justify-content-center square-btn"><i class="fas fa-edit fa-fw"></i></a>
                        </div>

                        <div class="d-inline-block">
                          <a href="{{ route('delete-member', $item->customer_id) }}" class="btn my-btn btn-sm d-flex justify-content-center square-btn" onclick="event.preventDefault(); if(confirm('Are you sure you want to remove this member?')){document.getElementById('delete-form-{{ $item->customer_id }}').submit();}"><i class="fas fa-trash-alt fa-fw"></i></a>
                        </div>
                      </div>

                      <form id="delete-form-{{ $item->customer_id }}" action="{{ route('delete-member', $item->customer_id) }}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            {!! $members->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="live-preview">
    <div>
    <div class="row">
    <div class="col-lg-12">
    <div class="row">
                <div class="col-10">
                    <h5 class="header mt-2">Adviser</h5> 
                </div>
                <div class="col-2">
                    <a href="{{route('create-course')}}">
                        <button type="button" style="width:100%" class="btn btn-primary" >
                        + Add Adviser
                        </button>
                    </a>
                </div>
    </div>
    
        
        <div class="card p-4 border mt-4">
        <div class="row">
        
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Email</th>
                    <th scope="col">Advisory Capacity</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
        
            <tbody>
                
                @php
                $count = ($appt->currentPage() - 1) * $appt->perPage() + 1;
                @endphp

                @foreach($appt as $item)
                    <tr>
                    <th scope="row">{{ $count++ }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>   
                    <td>

                        {{-- <form action="{{ route('edit_appt', $item->app_id) }}" method="POST">
                            {!! csrf_field() !!}
                            @method('PUT')
                        <button type="submit" class="btn btn-primary" >
                            Accept
                        </button>
                    </form> --}}

                @if($item->status == 'Accepted')
  
                    <button type="button" class="btn btn-outline-success" style="width: 100%" disabled>Accepted</button>
                @elseif($item->status == 'Declined')
                    <button type="button" class="btn btn-outline-danger" style="width: 100%" disabled>Declined</button>
                @else
                    <a href="{{ route('accept', $item->app_id) }}" onclick="event.preventDefault(); if(confirm('Are you sure you want to accept this appointment?')){document.getElementById('update-form-{{ $item->app_id }}').submit();}">
                        <button type="submit" class="btn btn-success">Accept</button>
                    </a>
                    <form id="update-form-{{$item->app_id}}" action="{{ route('accept', $item->app_id) }}" method="post" style="display: none;">
                        @csrf
                        @method('PUT')
                    </form>
                
                    <a href="{{ route('decline', $item->app_id) }}" onclick="event.preventDefault(); if(confirm('Are you sure you want to decline this appointment?')){document.getElementById('decline-form-{{ $item->app_id }}').submit();}">
                        <button type="submit" class="btn btn-danger">Decline</button>
                    </a>
                
                    <form id="decline-form-{{$item->app_id}}" action="{{ route('decline', $item->app_id) }}" method="post" style="display: none;">
                        @csrf
                        @method('PUT')
                    </form>
                @endif
                

                    </td>
                    </tr>

                    @endforeach
                </tbody>
        
                </table>

                {!! $appt->render() !!}
      
            </div>

</div>
</div>
</div>
<!-- end row -->
</div>
</div>
</div>
@endsection

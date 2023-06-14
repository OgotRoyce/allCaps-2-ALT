@extends('layouts.adviser')

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
            <h5 class="header mt-2"><i class="fas fa-user"></i>Advisee</h5>
          </div>
          <div class="header-line"></div>
        </div>
      </div>
 
      {{-- <div class="container-fluid">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <div class="profile-userpic">
                        <img class="img-responsive" src="{{ asset('pictures/'.( auth('student')->user()->photo ? auth('student')->user()->photo : 'pic.png')) }}"  />
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <h5 class="member-name">{{ auth('student')->user()->first_name }}
                                {{ auth('student')->user()->last_name }}</h5>
                        </div>
                        <div class="profile-usertitle-group">
                            <h6 class="member-group">
                                <b>{{ auth('student')->user()->group_name }}</b></h6>
                        </div>
                        <div class="profile-usertitle-email">
                            <h6 class="member-email mb-2 text-muted"><strong>Email:</strong>
                                {{ auth('student')->user()->email }}</h6>
                        </div>

                    </div>
                </div>
            </div>

                <div class="col-md-9">
                    <div class="profile-content">
                        <div class="profile-project-details">
                            <h5 class="profile-project-head"><i class="fas fa-folder-open"></i> Project </h5>
                            <div class="header-line-2"></div>
                            @foreach ($projects as $item)
                            <div class="project-container">
                                <div class="project-img">
                                    <img class="app-logo" src="{{ asset('pictures/'.($item->logo ? $item->logo : 'pic.png')) }}"  />
                                </div>
                                <div class="card-content">
                                    <h4 class="project-title">{{ $item->title }}</h4>
                                    <div class="project-subtitle">
                                        <p>{{ $item->description }}</p>
                                        <p style="font-size: 12px; color: #666;">Developed by
                                            {{ auth('student')->user()->first_name }}
                                            {{ auth('student')->user()->last_name }}</p>
                                            <p style="font-size: 12px; color: #666;">Group: 
                                                {{ auth('student')->user()->group_name }}
                                              </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
    </div>
  </div>
  @endsection
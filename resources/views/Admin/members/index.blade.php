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

.cards-container { display: flex; flex-wrap: wrap; align-content: center; justify-content: flex-start; flex-direction: row; }
.profile-card { border-radius: 18px; background: #fbfcff; padding: 18px 12px 42px 14px; margin: 28px; width: fit-content, calc(33.33% - 40px); transition: .3s ease;  }
.profile-card:hover { background: #fff; cursor: pointer; box-shadow: -2px 3px 12px #d1d1d1; transform: scale(1.05); }
.avatar { transition: .3s ease; border-radius: 999px; width: 72px; }
.avatar:hover { transform: scale(1.2) rotate(22deg);  }
.name { font-weight: 900; position: relative; margin-top: -64px; font-size: 14px; margin-left: 84px; margin-right: 36px; }
.profile-card .name {
  /* existing rules */
  font-size: 18px;
  margin-bottom: 8px;
}

.profile-card .email {
  font-size: 14px;
  color: #777;
  margin-left: 84px;
}

.profile-card .avatar {
  border-radius: 999px;
  width: 72px;
  padding: 10px;
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
    </div>
  </div>

  <div class="row cards-container">
    @foreach ($members as $item)
        <div class="col-md-4 col-lg-3">
            <div class="profile-card">
                <img class= "avatar" src="{{ asset('public/images/users/'.$item->photo) }}" alt="{{ $item->first_name }} {{ $item->last_name }}" class="avatar">
                <div class="name">{{ $item->first_name }} {{ $item->last_name }}</div>
                <div class="email">{{ $item->email }}</div>
                <a href="{{ route('edit-member', $item->customer_id) }}" class="stretched-link"></a>
            </div>
        </div>
    @endforeach
</div>
<!-- ./ cards-container --> 
@endsection

<!-- @extends('layouts.admin') -->

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
  margin-bottom: 10px;
}


.profile-card { border-radius: 18px; background: #fbfcff; padding: 18px 12px 42px 14px; margin: 28px; width: fit-content; transition: .3s ease;  }
.profile-card:hover { background: #fff; cursor: pointer; box-shadow: -2px 3px 12px #d1d1d1; transform: scale(1.05); }
.avatar { transition: .3s ease; border-radius: 999px; width: 72px; }
.avatar:hover { transform: scale(1.2) rotate(22deg);  }
.name { font-weight: 900; position: relative; margin-top: -64px; font-size: 14px; margin-left: 84px; margin-right: 36px; }
.profile-card .name {
  /* existing rules */
  font-size: 18px;
  margin-bottom: 8px;
}
.profile-card .adv-role {
  font-size: 16px;
  color: #3f3f3f;
  margin-left: 84px;
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
      <div class="col-lg-12">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="header mt-2">
            <i class="fas fa-users"></i> Advisoree
            <span class="badge badge-secondary">
              <span style="font-weight: 300; color: #bfbfbf;">List of Students</span>
            </span>
          </h5>
        </div>
        <div class="header-line"></div>
      </div>
    </div>
  </div>

  <div class="row cards-container">
        <div class="col-md-4 col-lg-3">
            <div class="profile-card">
                <img class="avatar" src="{{ asset('images/pic.png')}}" alt="Avatar" />
                <div class="name">Royce Ogot</div>
                <div class="email">201911397@gordoncollege.edu.ph</div>
            </div>
        </div>
</div>
@endsection
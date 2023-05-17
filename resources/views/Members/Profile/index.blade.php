@extends('layouts.member')

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

.member-name {
margin-top: 10px;
  font-size: 24px;
  margin-bottom: 8px;
}
.member-email {
    font-size: 0.8rem;
}
.card-img {
  padding: 10px;
}
/* .card {
  background-color: transparent;
} */

.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
  border-radius: 18px;
}

.profile-userpic {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  border-radius: 999px;
  align-items: center;
  border-color: #ff6600 !important;
  border-width: 3px; /* add this to set the border width */
  border-style: solid; /* add this to set the border style */
}


.profile-usertitle {
  text-align: center;
  margin-top: 20px;
  align-items: center;
}

.profile-usertitle-name {
    text-transform: uppercase;
    margin-top: 10px;
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-email {
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}
/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

</style>
@section('content')

<div class="container-fluid">
    <div class="live-preview">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="header mt-2"><i class="fas fa-user"></i> Profile </h5>
                </div>
                <div class="header-line"></div>
            <div>
        </div>
    </div>
</div>

    <!-- <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img class="card-img p-3" src="{{ asset('images/dp.png') }}" style="max-width: 30%;">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="member-name">{{ auth('member')->user()->first_name }} {{ auth('member')->user()->last_name }}</h5>
                    <h6 class="member-email mb-2 text-muted">Email: {{ auth('member')->user()->email }}</h6>
                </div>
            </div>
        </div>
    </div>

</div> -->


<div class="container-fluid">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{ asset('images/dp.png') }}" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                        <h5 class="member-name">{{ auth('member')->user()->first_name }} {{ auth('member')->user()->last_name }}</h5>
					</div>
					<div class="profile-usertitle-email">
                        <h6 class="member-email mb-2 text-muted">Email: {{ auth('member')->user()->email }}</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>


@endsection

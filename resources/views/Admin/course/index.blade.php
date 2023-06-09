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


.profile-card {
        border-radius: 18px;
        background: #fff;
        padding: 18px 12px 42px 14px;
        margin: 0 0 28px 0; /* modified */
        width: fit-content, calc(33.33% - 40px);
        transition: .3s ease;
    }

    .profile-card:hover {
        background: #fff;
        cursor: pointer;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        transform: scale(1.01);
    }

    .avatar {
        transition: .3s ease;
        width: 72px;
        object-fit: cover;
    }

    .avatar:hover {
        transform: scale(1.2) rotate(22deg);
    }

    .name {
        font-weight: 900;
        position: relative;
        margin-top: -64px;
        font-size: 14px;
        margin-left: 84px;
        margin-right: 36px;
    }
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

  /* styles for 404 */

  .page_404 {
        padding: 40px 0;
        background: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .page_404 img {
        width: 100%;
    }

    .four_zero_four_bg {
        background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 400px;
        background-position: center;

    }

    #create-project-btn {
        margin-top: 20px;
    }

    .four_zero_four_bg h1 {
        font-size: 80px;

    }

    .four_zero_four_bg h3 {
        font-size: 80px;
    }

    .link_404 {
        color: #fff !important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;
    }

    .contant_box_404 {
        margin-top: -50px;
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

  <body>
            <section class="page_404">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="col-sm-10 col-sm-offset-1  text-center">
                                <div class="four_zero_four_bg">
                                    <h1 class="text-center "><b>Oops...</b></h1>
                                </div>

                                <div class="contant_box_404">
                                    <h3 class="h2">Looks like you don't have any advisee yet.</h3>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>

  <!-- <div class="row cards-container">
        <div class="col-md-4 col-lg-3">
            <div class="profile-card">
                <img class="avatar" src="{{ asset('images/pic.png')}}" alt="Avatar" />
                <div class="name">Royce Ogot</div>
                <div class="email">201911397@gordoncollege.edu.ph</div>
            </div>
        </div>
</div> -->
@endsection
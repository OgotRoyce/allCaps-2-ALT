@extends('layouts.adviser')

<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

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
        margin-bottom: 10px;
    }

    body{
  background-color: #fcfcfc;
}

.row{
  margin:auto;
  margin-bottom: 10px;
  margin-top: 10px;
  width: 100%;
  display: flex;
  flex-flow: column;
  .card{
    width: 100%;
    /* margin-bottom: 5px; */
    display: block;
    transition: opacity 0.3s;
  }
}

.card-body {
  padding: 0.5rem;
  text-align: right; /* Add this line */
  table {
    width: 100%;
    tr {
      display: flex;
      td {
        a.btn {
          font-size: 0.8rem;
          padding: 3px;
        }
      }
      td:nth-child(2) {
        text-align: right;
        justify-content: space-around;
      }
    }
  }
}

.card-title:before{
  display:inline-block;
  font-family: 'Font Awesome\ 5 Free';
  font-weight:900;
  font-size: 1.1rem;
  text-align: center;
  border: 2px solid grey;
  border-radius: 100px;
  width: 30px;
  height: 30px;
  padding-bottom: 3px;
  margin-right: 10px;
}

h2.text-center {
  margin-bottom: 20px;
}



.card.display-none{
  display: none;
  transition: opacity 2s;
}

.avatar {
  transition: .3s ease;
  width: 50px;
  height: 50px;
  object-fit: cover;
  border-radius: 999px;
  margin-right: 20px;
}

.card-title {
  font-size: 18px;
  margin-bottom: 5px;
}

.application-card {
  margin-bottom: 20px;
  border: 1px solid #dddddd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.application-card .card-body {
  padding: 20px;
}

</style>

@section('content')
<div class="container-fluid">
  <div class="live-preview">
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="header mt-2"><i class="fas fa-users"></i> Applications</h5>
        </div>
        <div class="header-line"></div>
      </div>
    </div>

    <div class="card application-card application-invitation">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex align-items-center">
          <img class="avatar" src="{{ asset('images/pic.png')}}" alt="Avatar" />
          <div class="card-title"><b>Royce Ogot</b> applied to your Advisoree.</div>
        </div>
        <div class="d-flex">
          <a href="#" class="btn btn-danger  d-flex align-items-center justify-content-center mr-1">Accept</a>
          <a href="#" class="btn btn-light  d-flex align-items-center justify-content-center" style="margin-left: 10px;">Dismiss</a>
        </div>
      </div>
    </div>

    <div class="card application-card application-invitation">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex align-items-center">
          <img class="avatar" src="{{ asset('images/pic.png')}}" alt="Avatar" />
          <div class="card-title"><b>Ken Ammay</b> applied to your Advisoree.</div>
        </div>
        <div class="d-flex">
          <a href="#" class="btn btn-danger  d-flex align-items-center justify-content-center mr-1">Accept</a>
          <a href="#" class="btn btn-light  d-flex align-items-center justify-content-center" style="margin-left: 10px;">Dismiss</a>
        </div>
      </div>
    </div>
        
    <div class="card application-card application-invitation">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex align-items-center">
          <img class="avatar" src="{{ asset('images/pic.png')}}" alt="Avatar" />
          <div class="card-title"><b>Leicel Velasquez</b> applied to your Advisoree.</div>
        </div>
        <div class="d-flex">
          <a href="#" class="btn btn-danger  d-flex align-items-center justify-content-center mr-1">Accept</a>
          <a href="#" class="btn btn-light  d-flex align-items-center justify-content-center" style="margin-left: 10px;">Dismiss</a>
        </div>
      </div>
    </div>
        
    <div class="card application-card application-invitation">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex align-items-center">
          <img class="avatar" src="{{ asset('images/pic.png')}}" alt="Avatar" />
          <div class="card-title"><b>Yasmin Asistido</b> applied to your Advisoree.</div>
        </div>
        <div class="d-flex">
          <a href="#" class="btn btn-danger  d-flex align-items-center justify-content-center mr-1">Accept</a>
          <a href="#" class="btn btn-light  d-flex align-items-center justify-content-center" style="margin-left: 10px;">Dismiss</a>
        </div>
      </div>
    </div>
        </div>     
    </div>
  </div>
</div>

<!-- ./ cards-container -->
@endsection 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $(".btn-light").on("click", function(e){
    e.preventDefault();
    
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to dismiss this application?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, dismiss it!'
    }).then((result) => {
      if (result.isConfirmed) {
        // Perform the action after user confirms
        $(this).closest(".application-card").addClass("display-none");
        Swal.fire(
          'Dismissed!',
          'The application has been dismissed.',
          'success'
        )
      }
    })
  });
  
  $(".btn-danger").on("click", function(e){
    e.preventDefault();
    
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to accept this application?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, accept it!'
    }).then((result) => {
      if (result.isConfirmed) {
        // Perform the action after user confirms
        $(this).closest(".application-card").addClass("display-none");
        Swal.fire(
          'Accepted!',
          'Student has been added to your Advisees.',
          'success'
        )
      }
    })
  });
});

</script>
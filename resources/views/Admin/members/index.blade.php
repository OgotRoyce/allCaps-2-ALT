@extends('layouts.admin')

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

    <div class="row container-fluid application-container">
      <h2 class="text-center">Pending Applications</h2>
        <div class="card application-card application-invitation">
            <div class="card-body">
                <table>
                    <tr>
                    <td style="width:90%"><div class="card-title"><b>Jose Manalo</b> applied to your Advisoree.</div></td>
                    <td style="width:30%">
                        <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-danger mr-1">Accept</a>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-light" style="margin-left: 10px;">Dismiss</a>
                        </div>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
        </div>     
        <div class="card application-card application-invitation">
            <div class="card-body">
                <table>
                    <tr>
                    <td style="width:90%"><div class="card-title"><b>Von Tandoc</b> applied to your Advisoree.</div></td>
                    <td style="width:30%">
                        <div class="d-flex justify-content-end">
                        <a href="#" class="btn btn-danger mr-1">Accept</a>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-light" style="margin-left: 10px;">Dismiss</a>
                        </div>
                        </div>
                    </td>
                    </tr>
                </table>
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
    $(this).closest(".application-card").addClass("display-none");
  });
});
</script>

<script>
    $(document).ready(function() {
  $(".btn-danger").on("click", function(e){
    e.preventDefault();
    $(this).closest(".application-card").addClass("display-none");
  });
});
</script>
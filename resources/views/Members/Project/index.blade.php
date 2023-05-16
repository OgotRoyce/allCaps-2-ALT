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
</style>

@section('content')
<div class="container-fluic">
            <div class="live-preview">
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                        <h5 class="header mt-2"><i class="fas fa-folder-open"></i> My project</h5>
                        <div class="header-line"></div>
                            <div class="card p-4 border mt-4">
                                <div class="row">
                                   <h5>Project page is Working</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
</div>
@endsection


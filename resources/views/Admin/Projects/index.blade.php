<!-- @extends('layouts.admin') -->

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

    body {
        background: #fff;
        font-size: 14px;
    }

    .wrapper {
        display: table;
        height: 100%;
        width: 100%;
        height: 100vh;
        display: flex;
        /* justify-content: center; */
        align-items: center;
        flex-wrap: wrap;
        align-content: center;
        justify-content: flex-start;
        flex-direction: row;
    }

    h1.heading {
        color: #fff;
        font-size: 1.15em;
        font-weight: 900;
        margin: 0 0 0.5em;
        color: #505050;
    }

    .card {
        /* display: block;  */
        margin-bottom: 20px;
        margin-right: 20px;
        background-color: #fff;
        border-radius: 10px !important;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        transition: box-shadow .25s;
        height: 80%;
        flex-basis: calc(25% - 20px);
        /* add this */
        max-width: calc(25% - 20px);
        /* add this */
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 20px;

    }

    @media screen and (max-width: 767px) {
        .card {
            flex-direction: column;
        }
    }

    .img-card {
        padding: 20px;
        flex-basis: 100px;
        /* add this */
        max-width: 100px;
        /* add this */
    }

    .card:hover {
        box-shadow: -2px 3px 12px #d1d1d1;
    }

    .img-card app-logo {
        transition: .3s ease;
        border-radius: 999px;

        padding: 20px;
    }

    .app-logo {
        /* max-width: 70px; */
        max-height: 70px;
        object-fit: cover;
        border: 1px solid;
        padding: 5px;
        border-radius: 999px;
        border-color: #c4bfbf;
    }

    .card-content {
        /* padding:20px; */
        text-align: left;
        height: 170px;
        overflow: hidden;
        justify-content: center;
        /* add this */
        flex-grow: 1;
        /* add this */
    }

    .card-title {
        margin-top: 0px;
        font-weight: 700;
        font-size: 24px !important;
    }

    @media screen and (max-width: 575px) {
        .card-title {
            font-size: 20px !important;
        }
    }

    @media screen and (min-width: 576px) and (max-width: 767px) {
        .card-title {
            font-size: 22px !important;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        .card-title {
            font-size: 23px !important;
        }
    }

    .card-title a {
        color: #000;
        text-decoration: none !important;
    }

    .card-title a:hover {
        color: #f06548;
        text-decoration: none !important;
    }

    .card-subtitle {
        font-size: 14px;
        color: #999;
        margin-top: 15px;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="live-preview">
            <div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="header mt-2"><i class="fas fa-users"></i> Projects
                                <span class="badge badge-secondary"><span style="font-weight: 300; color: #bfbfbf;">List of
                                        projects</span></span>
                            </h5>
                        </div>
                        <div class="header-line"></div>
                        @foreach ($projects as $item)
                            <div class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="card d-flex flex-row">
                                                    <div class="col-md-4 col-lg-3 img-card">
                                                        <img class="app-logo"
                                                            src="{{ asset('public/images/' . $item->logo) }}">
                                                    </div>
                                                    <div class="col-md-8 col-lg-9 card-content p-3">
                                                        <h4 class="card-title">
                                                            <a href="#">{{ $item->title }}</a>
                                                        </h4>
                                                        <div class="card-subtitle">
                                                            <p>{{ $item->description }}</p>
                                                            <p style="font-size: 12px; color: #666;">Developed by Michael
                                                                Jaskcon</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

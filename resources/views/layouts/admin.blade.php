<!doctype html>
<?php
  date_default_timezone_set("Asia/Manila");
?>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>

<meta charset="utf-8" />
<title>ALLCaps</title>
<link rel="icon" href="assets/images/AC icon.ico" type="image/icon type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/AC icon.ico">

<link rel="stylesheet" href="{{ asset('libs/aos/aos.css') }}" />

<script src="{{ asset('js/layout.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('css/icons.min.css') }}" />

<link rel="stylesheet" href="{{ asset('css/app.min.css') }}" />

<link rel="stylesheet" href="{{ asset('css/custom.min.css') }}" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

{{-- boostrap CDN --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/login.css', 'resources/sass/admin.scss']) --}}


</head>
<style>
.header {
    display: flex;
    align-items: center;
    padding: 20px;
}
.menu-title{
color: #fff;
}

.menu-link{
color: #fff;
}

.nav-logo{
  /* height: 70px; */
  width: 10%;
}
.navbar-nav{
    border: none;
    font-size: 100px;

}

.text-white{
    font-size: 100px;
}

/* .horizontal-logo{
    background: none;
    display: block; */
/* } */
.logo{
    background: none;
    display: block;
    text-align: center;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 50px; 
}
.navbar{
  height: 70px;
  width: 100%;
  padding: 14px 30px;
  background-color: #1b4cd3;
  position: relative;
}
.navbar .nav-header{
  display: inline;
}
.navbar .nav-header .nav-logo{
  display: inline-block;
  margin-top: -7px;
}
.app-menu .nav-link.active {
    background-color: #FFAC1C;
}
.navbar-header {
  font-size: 0;
}

.header-content-wrapper {
  display: flex;
  width: 100%;
  font-size: initial;
}

.header-item,
.nav-logo {
  display: inline-block;
  font-size: initial;
}

.header-item {
  margin-right: 1rem;
}

.logout-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.logout-button {
    background-color: #525252;
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    margin-top: 500px;
}
</style>
<body>
<!-- Begin page -->
<div id="layout-wrapper">

<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="header-content-wrapper d-flex align-items-center">
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button> 

                <div class="nav-logo d-flex align-items-center ms-3">
                    <img src="{{ asset('images/AC WORDMARK.png') }}" alt="horizontal-logo" style="width: 70%">
                </div>

                <div class="d-flex align-items-center ms-auto">
                    <i class="far fa-calendar-alt"></i>
                    <span class="ms-2">{{ date("l, F j, Y, g:i a") }}</span>
                </div>
            </div>
        </div>
    </div>
</header>


    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu" style="background: #3F3F3F;">

        <div class="logo">
            <img loading="lazy" src="{{asset('images/AC LOGO light.png')}}" alt="..." width="120" height="120" >

        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                
                @if(auth()->user()->role === "admin")
                <ul class="navbar-nav" id="navbar-nav">
                    <!-- <li class="menu-title text-white"><span data-key="t-menu">Menu</span></li> -->
                    <li class="nav-item">
                        <a class="nav-link menu-link text-white" href="{{route('member')}}">
                            <i class="ri-team-fill"></i> <span data-key="t-dashboards">Advisers</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link text-white" href="{{route('appointments')}}" >
                            <i class="ri-apps-2-line"></i> <span data-key="t-apps">Appointments</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link text-white" href="{{route('course')}}">
                            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Golf Course</span>
                        </a>
                    </li>
<!-- 
                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('schedules')}}">
                            <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Schedules</span>
                        </a>
                    </li> -->

                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('usertype')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">User Type</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->role === "finance")
                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('transaction')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('transaction')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">Invoice</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->role === "kiosk")
                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('kiosk')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">kiosk</span>
                        </a>
                    </li><li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('kiosk')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">kiosk</span>
                        </a>
                    </li>
                    @endif


                    @if(auth()->user()->role === "services")
                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('services')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">Services</span>
                        </a>
                    </li>
                    @endif

                    @if(auth()->user()->role === "merchandise")
                    <li class="nav-item" >
                        <a class="nav-link menu-link text-white" href="{{route('merchandise')}}">
                            <i class="ri-pages-line"></i> <span data-key="t-pages">Merchandise</span>
                        </a>
                    </li>
                    @endif


                </ul>
            </div>
            <div class="logout-container">
                <a class="logout-button" href="{{ route('logout-admin') }}" onclick="event.preventDefault(); if(confirm('Are you sure you want to logout?')) { document.getElementById('logout-form').submit(); }">
                    <i class="mdi mdi-logout text-white fs-16 align-middle me-1"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout-admin') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>
    </div>
    <!-- Left Sidebar End -->
    <div class="vertical-overlay"></div>
    <div class="main-content overflow-hidden">

        <div class="page-content">
            <div class="container-fluid">
                <main class="py-4">
                    @yield('content')
                </main>

            </div>
        </div>
    </div>


<!-- JAVASCRIPT -->
{{-- <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="assets/js/plugins.js"></script>


<script src="assets/libs/aos/aos.js"></script>

<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/js/pages/animation-aos.init.js"></script>


<script src="assets/js/app.js"></script> --}}

<script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- aos js -->
<script src="{{ asset('libs/aos/aos.js') }}"></script>
<!-- prismjs plugin -->
<script src="{{ asset('/libs/prismjs/prism.js') }}"></script>
<script src="{{ asset('/js/pages/animation-aos.init.js') }}"></script>
    <!-- App js -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

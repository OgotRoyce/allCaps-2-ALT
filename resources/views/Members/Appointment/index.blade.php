@extends('layouts.member')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.all.min.js"></script>

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

    :root {
        --bg-clr: #d97b9d;
        --primary: #ff6600;
        --white: #fff;
        --text-clr: #1a1819;
        --sub-text-clr: #c6c6c6;
        --sub-bg-clr: #f7f5fa;
        --btn-hover-clr: #f06548;
        --border-clr: #eaeaea;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;

    }

    body {
        background: #fff;
        font-size: 14px;
    }

    .wrapper {
        height: 100vh;
        display: flex;
        /* justify-content: center; */
        align-items: center;
        flex-wrap: wrap;
        align-content: center;
        justify-content: flex-start;
        flex-direction: row;
    }

    .wrapper-fluid {
        display: flex;
        flex-wrap: wrap;
        align-content: center;
        justify-content: flex-start;
        flex-direction: row;
    }

    .user_select_wrap {
        background: #e8e8ed;
        /* max-width: 750px; */
        width: 100%;
        /* change this from "fit-content, calc(33.33% - 40px)" to "100%" */
        padding: 18px 12px 42px 14px;
        border-radius: 18px;
        margin-top: 20px;
        transition: .3s ease;
        margin: 0 0 28px 0; /* modified */
        margin-left: auto;
        /* add this to center the wrapper horizontally */
        margin-right: auto;
        /* add this to center the wrapper horizontally */
    }



    .user_select_wrap .title p {
        text-align: center;
        font-size: 24px;
        font-weight: 700;
        color: #3f3f3f;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .user_select {
        display: flex;
        flex-wrap: wrap;
        align-content: center;
        justify-content: flex-start;
        flex-direction: row;
    }

    .user_item {
        border-radius: 18px;
        background: #fff;
        padding: 18px 12px 42px 14px;
        margin: 0 0 28px 0; /* modified */
        width: fit-content, calc(33.33% - 40px);
        transition: .3s ease;
        margin-right: 20px; /* added */
    }

    .user_item input {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        cursor: pointer
    }

    .user_item .info {
        display: flex;
        align-items: center;
    }

    .user_item .info .name-role {
        display: flex;
        flex-direction: column;
        margin-left: 10px;
    }

    .user_item .info .name-role .name {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: -1px;
    }

    .user_item .info .name-role .role {
        color: var(--sub-text-clr);
        font-size: 14px;
    }

    .user_item .info img {
        margin-right: 5px;
        border-radius: 50%;
    }

    .user_item .checkmark {
        opacity: 0;
        position: absolute;
        top: -10px;
        right: -10px;
        width: 20px;
        height: 20px;
        background: var(--primary);
        border-radius: 50%;
        transition: 0.5s ease;
        cursor: pointer;

    }

    .user_item .checkmark:before {
        content: "";
        position: absolute;
        top: 6px;
        left: 5px;
        width: 6px;
        height: 2px;
        border: 2px solid;
        border-color: transparent transparent var(--white) var(--white);
        transform: rotate(-45deg);

    }

    .user_select_wrap button {
        border: 0;
        background: var(--primary);
        color: var(--white);
        padding: 12px 25px;
        margin-top: 20px;
        border-radius: 3px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.5s ease;
    }

    .user_select_wrap button:hover {
        background: var(--btn-hover-clr);
    }

    .user_item.active {
        background: var(--white);
        box-shadow: 0 0 6px 2px rgba(0, 0, 0, .1);
        border-color: #ff6600 !important;
        border-width: 2px;
        /* add this to set the border width */
        border-style: solid;
        /* add this to set the border style */
    }

    .user_item.active input:checked~.checkmark {
        opacity: 1;
    }

    .avatar {
        transition: .3s ease;
        border-radius: 999px;
        width: 70px;
    }

    .user_item:hover {
        background: #fff;
        cursor: pointer;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        transform: scale(1.01);
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="live-preview">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="header mt-2"><i class="fas fa-users"></i> Advisers
                            <span class="badge badge-secondary"><span style="font-weight: 300; color: #bfbfbf;">List of
                                    advisers</span>
                        </h5>
                    </div>
                    <div class="header-line"></div>
                </div>
            </div>
        </div>
    </div>

                        <div class="wrapper-fluid">
                            <div class="user_select_wrap">
                                <div class="title">
                                    <p>Select an adviser below</p>
                                </div>
                                    
                                    <div class="user_select">
                                        @foreach ($advisers as $item)
                                            <div class="col-md-4 col-lg-3">
                                                <div class="user_item">
                                                    <!-- <input type="checkbox" class="checkbox-input">> -->
                                                    <span class="checkmark"></span>
                                                    <div class="info">
                                                        <img class="avatar" src="{{ asset('images/pic.png') }}" alt="Avatar">
                                                        <div class="name-role">
                                                            <p class="name">{{ $item->name }}</p>
                                                            <p class="role">{{ $item->role }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                <button>Choose</button>
                            </div>
                        </div>
        @endsection
        <!-- JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var user_items = document.querySelectorAll(".user_item");
                var selected_item;

                user_items.forEach(function(item) {
                    item.addEventListener("click", function() {
                        if (selected_item != null) {
                            // unselect previously selected item
                            selected_item.classList.remove("active");
                            selected_item.children[0].checked = false;
                        }
                        // select new item and update selected_item variable
                        item.classList.add("active");
                        item.children[0].checked = true;
                        selected_item = item;
                    });
                });
            });
        </script>
        <script>
            document.querySelector('button').addEventListener('click', function() {
                // Get the selected advisers
                var selectedAdvisers = document.querySelectorAll('.user_item.active');

                // Check if at least one adviser is selected
                if (selectedAdvisers.length > 0) {
                    // Show confirmation dialog
                    swal({
                        icon: 'warning',
                        title: 'Are you sure?',
                        text: 'Do you want to select the adviser(s)?',
                        showCancelButton: true,
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'No'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // User confirmed, show success message
                            swal({
                                icon: 'success',
                                title: 'Adviser selected!',
                                text: 'You have successfully selected the adviser(s).'
                            });
                        }
                    });
                } else {
                    // Show error message
                    swal({
                        icon: 'error',
                        title: 'No adviser selected!',
                        text: 'Please select one adviser.'
                    });
                }
            });
        </script>

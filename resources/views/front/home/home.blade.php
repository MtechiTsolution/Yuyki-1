<!DOCTYPE html>
<html lang="en">

<head>
    <!--<meta charset="UTF-8">-->
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">-->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yuyki</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar navbar-expand-lg mx-auto" id="nav-banner">
        <div class="nav-back nav-item-list w-100" style="z-index: 1000;">
            <div class="row">
                <div class="col-6">
                    <div class="navbar-brand  navbar-nav  list-unstyled ps-5" href="#">
                        <li class="nav-item ms-5 dropdown dropdown-text">
                            <a class="nav-link" href="{{ url('/business') }}">
                                Yuyki for Business
                            </a>
                        </li>
                        <li class="nav-item ms-3 dropdown dropdown-text">
                            <a class="nav-link" href="#">
                                Share your experines
                            </a>
                        </li>
                    </div>
                </div>
                <div class="col-6">
                    <button class="navbar-toggler mb-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mb-4"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                            <div class="btn gx-md-2 btn-navbar" id="button-nav">
                                <div class="dropdown" style="display: inline-block; width:40px;">
                                    <a href="javascript:void(0);" class="dropdown-toggle" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="me-4 mt-2" src="{{ asset('images/message.png') }}" alt="">
                                    </a>
                                    <ul class="dropdown-menu px-2"
                                        style="height: 223px;
                                    overflow-y: scroll;
                                    overflow-x: hidden;"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <div class="img-background" style="background: #D9D9D9BF; ">
                                                <div class="row py-2">
                                                    <div class="col-3">
                                                        <img src="{{ asset('images/avatar.svg') }}"
                                                            style="height: 41px;" class="ms-2">
                                                    </div>
                                                    <div class="col-9 mt-2">
                                                        <h4 style="font-size: 12px;">Marufuku Ramen</h4>
                                                        <p style="font-size: 7px;">Do you recommend this business?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-2">
                                            <div class="img-background"
                                                style="background: #D9D9D9BF; border-radius:14px, 14px, 0px, 0px;">
                                                <div class="row py-2">
                                                    <div class="col-3">
                                                        <img src="{{ asset('images/avatar.svg') }}"
                                                            style="height: 41px;" class="ms-2">
                                                    </div>
                                                    <div class="col-9 mt-2">
                                                        <h4 style="font-size: 12px;">Liholiho Yacht Club</h4>
                                                        <p style="font-size: 7px;">All friends activity is shown. Check
                                                            back
                                                            soon!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown" style="display: inline-block; width:40px;">
                                    <a href="javascript:void(0);" class="dropdown-toggle" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <img class="me-4 mt-2" src="{{ asset('images/bell.png') }}" alt="">
                                    </a>
                                    <ul class="dropdown-menu px-2"
                                        style="height: 223px;
                                    overflow-y: scroll;
                                    overflow-x: hidden;"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <div class="img-background" style="background: #D9D9D9BF; ">
                                                <div class="row py-2">
                                                    <div class="col-3">
                                                        <img src="{{ asset('images/avatar.svg') }}"
                                                            style="height: 41px;" class="ms-2">
                                                    </div>
                                                    <div class="col-9 mt-2">
                                                        <h4 style="font-size: 12px;">Marufuku Ramen</h4>
                                                        <p style="font-size: 7px;">Do you recommend this business?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-2">
                                            <div class="img-background"
                                                style="background: #D9D9D9BF; border-radius:14px, 14px, 0px, 0px;">
                                                <div class="row py-2">
                                                    <div class="col-3">
                                                        <img src="{{ asset('images/avatar.svg') }}"
                                                            style="height: 41px;" class="ms-2">
                                                    </div>
                                                    <div class="col-9 mt-2">
                                                        <h4 style="font-size: 12px;">Liholiho Yacht Club</h4>
                                                        <p style="font-size: 7px;">All friends activity is shown. Check
                                                            back
                                                            soon!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mt-2">
                                            <div class="img-background"
                                                style="background: #D9D9D9BF; border-radius:14px, 14px, 0px, 0px;">
                                                <div class="row py-2">
                                                    <div class="col-3">
                                                        <img src="{{ asset('images/avatar.svg') }}"
                                                            style="height: 41px;" class="ms-2">
                                                    </div>
                                                    <div class="col-9 mt-2">
                                                        <h4 style="font-size: 12px;">Liholiho Yacht Club</h4>
                                                        <p style="font-size: 7px;">All friends activity is shown. Check
                                                            back
                                                            soon!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ url('/login') }}" class="btn" id="button-1-nav" type="submit">Sign
                                    in</a>
                                <a href="{{ url('/login') }}" class="btn bg-theme" id="button-1-nav"
                                    type="submit">Login</a>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <div class="background">
        <img src="{{ asset('images/bg_1.png') }}" class="position-absolute top-0">
    </div>
    <div class="banner mt-5">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-12 text-center mt-5">
                    <img src="{{ asset('images/Frame.png') }}" class="mt-5" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="height: 500px;">
        <img src="{{ asset('images/bg_main.png') }}" class="position-absolute end-0">
    </div>
    <div class="search w-75 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <input type="text" class="w-100 p-2 py-2 pl-5"
                        style="background:#FCD975; border-radius:25px;border:none;">
                    <img src="{{ asset('images/magnifying-glass (1) 1.png') }}"
                        style="position: absolute;
                left: 15%;
                margin-top: 4px;">
                </div>
            </div>
        </div>
    </div>
    <div class="services w-50 mx-auto mt-3">
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
                    <a href="{{ url('/restaurant') }}" id="restaurants" class="services_h3">Restaurants</a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ url('/services') }}" id="home_services" class="services_h3">Home Services</a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{ url('/services') }}" id="auto_services" class="services_h3">Auto Services</a>
                </div>
            </div>
            <div class="restaurants">
                <div class="row mt-4">
                    <div class="col-3 px-1">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1 mt-2 ">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1 mt-2 ">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1 mt-2 ">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                    <div class="col-3 px-1  mt-2 ">
                        <button class="btn bg-theme-2 w-100">
                            <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                            Delivery
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

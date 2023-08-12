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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Add your other CSS stylesheets here -->

    {{-- <!-- Add Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
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
                                                <div class="ro  w py-2">
                                                    <div class="col-3">
                                                        <img src="{{ asset('images/avatar.svg') }}"
                                                            style="height: 41px;" class="ms-2">
                                                    </div>
                                                    <div class="col-     mt-2">
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
                    <img src="{{ asset('images/banner_logo.png') }}" class="mt-5" alt="">
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
                left: 5%;
                margin-top: 4px;">
                </div>
            </div>
        </div>
    </div>

    <div class="services w-50 mx-auto mt-3">
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
                    <a href="{{ url('/restaurant') }}" id="restaurants"
                        class="services_h3 text-decoration-none text-black">Restaurants</a>
                </div>
                <div class="col-4 text-center">
                    <a href="{{url('/services')}}" id="home_services" class="services_h3 text-decoration-none text-black">Home
                        Services</a>
                </div>
                <div class="col-4 text-center">
                    <a href="#" id="auto_services" class="services_h3 text-decoration-none text-black">Auto
                        Services</a>
                </div>
            </div>
        </div>

        <!-- Add your other content here -->

        <div class="restaurants" id="restaurants_div">
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

        <div class="home_services" id="home_services_div">
            <div class="row mt-4">
                <div class="col-3 px-1">
                    <button class="btn bg-theme-2 w-100">
                        <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                        sadasdas
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

        <div class="auto_services" id="auto_services_div">
            <div class="row mt-4">
                <div class="col-3 px-1">
                    <button class="btn bg-theme-2 w-100">
                        <img src="{{ asset('images/delivery-truck (1) 1.png') }}">
                        delivery
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

    {{-- <div class="slider mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="slider-heading mt-5">Amazing real life users generated content</h2>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="select_search w-75 mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="select mt-5 py-4 px-2">
                        <div class="row">
                            <div class="col-2 text-end">
                                <a href="#1a" data-toggle="tab"><i class='bx bxs-home search_icons'></i></a>
                            </div>
                            <div class="col-2 text-end">
                                <a href="#2a" data-toggle="tab"><i class='bx bx-search search_icons'></i></a>
                            </div>
                            <div class="col-2 text-end">
                                <a href=""><i class='bx bx-video search_icons'></i> </a>
                            </div>
                            <div class="col-2 text-end">
                                <a href=""><i class='bx bx-star search_icons'></i> </a>
                            </div>
                            <div class="col-2 text-end">
                                <a href=""><i class='bx bxs-edit-location search_icons'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content clearfix">
        <div class="banner_search mt-5 tab-pane active" id="1a">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-7 mt-5">
                        <i class='bx bxs-home banner_search_icons my-4'></i>
                        <h3 class="banner_search_heading">
                            Decide with confidence
                        </h3>
                        <p class="banner_search_paragraph my-3">Get all the information you need to decide with
                            confidence. See the
                            menu. See the
                            location. See the hours. See the amenities…it’s a business profile. Duh.
                        </p>
                    </div>
                    <div class="col-5 text-center">
                        <img src="{{ asset('images/banner1.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_search mt-5 tab-pane" id="2a">
            <div class="container mt-5">
                <div class="row mt-5">
                    <div class="col-7 mt-5">
                        <i class='bx bxs-home banner_search_icons my-4'></i>
                        <h3 class="banner_search_heading">
                            Hey Baby
                        </h3>
                        <p class="banner_search_paragraph my-3">Get all the information you need to decide with
                            confidence. See the
                            menu. See the
                            location. See the hours. See the amenities…it’s a business profile. Duh.
                        </p>
                    </div>
                    <div class="col-5 text-center">
                        <img src="{{ asset('images/banner1.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="download_yuyki">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center py-5">
                    <div class="h2 download_yuyki_h2">
                        Download Yuyki the app today
                    </div>
                </div>
                <div class="col-6 text-center py-5">
                    <img src="{{ asset('images/playstore.png') }}">
                </div>
                <div class="col-6 text-center py-5">
                    <img src="{{ asset('images/appstore.png') }}" class="mt-4">
                </div>
                <div class="col-12 text-center py-3">
                    <a href="" class="download_yuyki_a text-decoration-none text-black">Want to chat to
                        someone? Click here</a>
                </div>
            </div>
        </div>
    </div>

    <div class="getreward my-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="getreward_h3">Get Rewarded to support local</h3>
                    <p class="getreward_p mt-3">
                        We’re all about supporting local, so we’ve built a few ways for
                        you to get rewarded for trying out new spots, and spotlighting
                        some of your favorites.
                    </p>
                    <div class="row mt-5">
                        <div class="col-1">
                            <img src="{{asset('images/Group 390.png')}}">
                        </div>
                        <div class="col-11">
                            <p class="getreward_p ms-3">Offers - get discounts at local spots when you check in</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-1">
                            <img src="{{asset('images/Group 390.png')}}">
                        </div>
                        <div class="col-11">
                            <p class="getreward_p ms-3">Offers - get discounts at local spots when you check in</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-1">
                            <img src="{{asset('images/Group 390.png')}}">
                        </div>
                        <div class="col-11">
                            <p class="getreward_p ms-3">Offers - get discounts at local spots when you check in</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-themes px-5 mt-4 ms-5">
                                Get Yuyki
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <img src="{{asset('images/opop 1.png')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="getreward my-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{asset('images/opop 1.png')}}">
                </div>
                <div class="col-6">
                    <h3 class="getreward_h3">Get Rewarded to support local</h3>
                    <p class="getreward_p mt-3">
                        We’re all about supporting local, so we’ve built a few ways for
                        you to get rewarded for trying out new spots, and spotlighting
                        some of your favorites.
                    </p>
                    <div class="row mt-5">
                        <div class="col-1">
                            <img src="{{asset('images/Group 390.png')}}">
                        </div>
                        <div class="col-11">
                            <p class="getreward_p ms-3">Offers - get discounts at local spots when you check in</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-1">
                            <img src="{{asset('images/Group 390.png')}}">
                        </div>
                        <div class="col-11">
                            <p class="getreward_p ms-3">Offers - get discounts at local spots when you check in</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-1">
                            <img src="{{asset('images/Group 390.png')}}">
                        </div>
                        <div class="col-11">
                            <p class="getreward_p ms-3">Offers - get discounts at local spots when you check in</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-themes px-5 mt-4 ms-5">
                                Get Yuyki
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="recent_Activity mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="recent_Activity_h4 mt-5">Recent Activity</h4>
                </div>
                <div class="col-12">
                    <div class="row w-50 mx-auto">
                        <div class="col-4 text-center">
                            <a  href="" class="recent_Activity_a  text-decoration-none text-black">
                                Nearby
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="" class="recent_Activity_a text-decoration-none text-black">
                                Friend
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a  href=""  class="recent_Activity_a  text-decoration-none text-black">
                                Following
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the links and corresponding divs
        const restaurantsLink = document.getElementById('restaurants');
        const homeServicesLink = document.getElementById('home_services');
        const autoServicesLink = document.getElementById('auto_services');

        const restaurantsDiv = document.getElementById('restaurants_div');
        const homeServicesDiv = document.getElementById('home_services_div');
        const autoServicesDiv = document.getElementById('auto_services_div');

        // Hide all divs first
        restaurantsDiv.style.display = 'none';
        homeServicesDiv.style.display = 'none';
        autoServicesDiv.style.display = 'none';

        // Add event listeners for each link to show the corresponding div and hide others
        restaurantsLink.addEventListener('mouseover', () => showDiv(restaurantsDiv));
        restaurantsLink.addEventListener('mouseout', () => hideDiv(restaurantsDiv));

        homeServicesLink.addEventListener('mouseover', () => showDiv(homeServicesDiv));
        homeServicesLink.addEventListener('mouseout', () => hideDiv(homeServicesDiv));

        autoServicesLink.addEventListener('mouseover', () => showDiv(autoServicesDiv));
        autoServicesLink.addEventListener('mouseout', () => hideDiv(autoServicesDiv));

        function showDiv(div) {
            div.style.display = 'block';
        }

        function hideDiv(div) {
            div.style.display = 'none';
        }
        
    </script>


</body>

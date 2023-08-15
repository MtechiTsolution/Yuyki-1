<!DOCTYPE html>
<html lang="en">

<head>
    <!--    <meta charset="UTF-8">-->
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">-->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yuyki</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/desktop21.css') }}">
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

</head>

<body>

    <div class="header">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid nav-back ">
                <a class="navbar-brand " href="#">
                    <img src="{{ asset('images/Frame (1).png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="">Business Page</a></li>
                                <li><a href="">Upgrade Package</a></li>
                                <li><a href="">Yelp Ads</a></li>
                                <li><a href="">Connect</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Industries
                            </a>
                            <ul class="dropdown-menu" id="dropdown-menu-item">
                                <li><a href="#">Business Page</a>
                                </li>
                                <li><a href="">Restaurant and Night Life</a></li>
                                <li><a
                                        href="https://brands.yelp.com/?utm_medium=www&utm_source=cons_home&utm_content=header">
                                        National and Regional Brands</a></li>
                                <li><a
                                        href="https://business.yelp.com/partners/?utm_medium=www&utm_source=cons_home&utm_content=header">
                                        Marketing & Advertising Agencies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Resources
                            </a>
                            <ul class="dropdown-menu">
                                <li><a
                                        href="https://business.yelp.com/business-guide/?utm_medium=www&utm_source=cons_home&utm_content=header">Small
                                        Business Guide</a></li>
                                <li><a
                                        href="https://business.yelp.com/resources/?utm_medium=www&utm_source=cons_home&utm_content=header">Resource
                                        Center</a></li>
                                <li><a
                                        href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Events</a>
                                </li>
                                <li><a
                                        href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Podcasts</a>
                                </li>
                                <li><a
                                        href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="pt-md-2">
                            <a class="tel-a" href="tel:+(877) 767-9357"><img class="img-id "
                                    src="{{ asset('images/phone-call.png') }}" alt="">(877)
                                767-9357</a>
                        </li>

                    </ul>
                    <div class="btn gx-md-2 btn-navbar" id="button-nav">
                        <button class="btn" type="submit">Verify my free listing</button>
                        <button class="btn" type="submit">Login</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5 header-after text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div>
                    <h4>Join the largest restaurant consumer network in the <br>
                        US with Yuyki Guest Manager1</h4>
                    <p class="mt-3">For the first time, seat guests searching on Yelp and Google with one reservations
                        <br> and waitlist system
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="input-search mt-5 mb-5 pb-3">
        <div class="container mx-auto w-75">
            <div class="row">
                <div class="col-md-12">
                    <p class="ms-4">
                        (1/3) Enter your email. We'll contact you for a demo or schedule a time yourself.
                    </p>
                    <div class="form-group has-search">
                        <span class="bx bx-search form-control-feedback"></span>
                        <input style="background-color: #D9D9D9;" type="text" class="form-control" placeholder="">
                    </div>
                    <div class="button-next text-center">
                        <button class="mx-auto w-50"><a class="btn" href="#"><span>next</span></a></button>
                    </div>
                    <div class="text-center mt-4 italic">
                        <h6>1Comscore Media Metrix®, based on Yelp Guest Manager and Reserve <br>
                            with Google collective monthly average number of visitors in the U.S. 2022 when compared
                            <br>
                            to other Google Reserve integrations.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container logo-group text-center">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid mb-5" src="{{ asset('images/Group 507.png') }}" alt="">
                <p class="text-center mb-3">Join 11,000+ restaurants seating more guests with <br> Yelp Guest Manager
                </p>
                <img class="img-fluid mb-5" src="{{ asset('images/YGM-customer-logos-2 1.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="text-col">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-2">Attract guests on both <br>Yuyki & Google</h2>
                    <p class="mb-5">Restaurants can now buy one reservations and
                        waitlist system and show their tables to searching
                        guests on Yelp, Google Search, and Google Maps.</p>



                    <h3 class="mb-2 p-2">Yelp Guest Manager <button class=" float-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                            <i style="color: black;" class='bx bx-chevron-down'></i>
                        </button></h3>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Use Kiosk at your host stand to handle 50% of FOH
                            busywork. Let software take care of the wait so
                            staff can take care of guests.
                        </div>
                    </div>
                    <div class="bor mb-2">
                    </div>
                    <h4 class="mb-2 p-2">Yelp Guest Manager <button class=" float-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false"
                            aria-controls="collapseExample">
                            <i style="color: black;" class='bx bx-chevron-down'></i>
                        </button></h4>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            Use Kiosk at your host stand to handle 50% of FOH
                            busywork. Let software take care of the wait so
                            staff can take care of guests.
                        </div>
                    </div>
                    <div class="bor mb-2">
                    </div>
                    <h4 class="mb-2 p-2">Upgrade Package <button class=" float-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">
                            <i style="color: black;" class='bx bx-chevron-down'></i>
                        </button></h4>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            Use Kiosk at your host stand to handle 50% of FOH
                            busywork. Let software take care of the wait so
                            staff can take care of guests.
                        </div>
                    </div>
                    <div class="bor mb-2">
                    </div>
                    <h4 class="mb-2 p-2">Yelp Ads <button class=" float-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false"
                            aria-controls="collapseExample">
                            <i style="color: black;" class='bx bx-chevron-down'></i>
                        </button></h4>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body">
                            Use Kiosk at your host stand to handle 50% of FOH
                            busywork. Let software take care of the wait so
                            staff can take care of guests.
                        </div>
                    </div>
                    <div class="bor mb-2">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('images/Rectangle 503.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="text-des">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>
                        Great restaurants are full. And filling your restaurant <br>
                        has never been easier with Yuyki Guest Manager.

                    </h3>
                    <p class="mt-3">Automate your FOH to seat 8% more diners without paying cover fees. Accept
                        <br>reservations, waitlist
                        parties, takeout orders, and manage table turns without hosts <br> wasting time on data entry.
                    </p>

                    <div class="button-next text-center mt-5">
                        <button class="mx-auto">
                            <a class="btn  ps-5 pe-5" href="{{url('/desktop22')}}"><span>Schedule a Call
                                </span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="{{ asset('images/tfhfjff 1.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="grid-layout grid-image">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <h3 class="mb-2">Maximize your revenue…</h3>
                    <p class="text-center">...with one discovery and restaurant reservations system designed for the
                        millions of <br> hungry folks searching on Yuyki & Google.</p>
                    <div class="button-next-end text-center mt-1">
                        <button class="mx-auto"><a class="btn  ps-5 pe-5" href="#"><span>Schedule a Call
                                </span></a></button>
                    </div>
                </div>
                <div class="row mb-5 img-text-p">
                    <div class="col-md-6 d-flex align-items-center">

                        <img class="me-3" src="{{ asset('images/bookmark-white 1.png') }}" alt="">

                        <h4>Get discovered
                            <p>Millions of restaurants searches happen on Yuyki every day. Give searchers an easier way
                                to end up at your restaurant.</p>
                        </h4>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <img class="me-3" src="{{ asset('images/queue 1.png') }}" alt="">

                        <h4>Seat more guests
                            <p>433 million diners have booked a table at a restaurant using Yuyki Guest Manager since
                                2017.</p>
                        </h4>
                    </div>
                </div>
                <div class="row img-text-p mb-5">
                    <div class="col-md-6 d-flex align-items-center">

                        <img class="me-3" src="{{ asset('images/wall-clock 1.png') }}" alt="">

                        <h4>One FOH system that's always improving
                            <p>Yuyki Guest Manager adds improvements and new features every month. See what’s fresh.</p>
                        </h4>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <img class="me-3" src="{{ asset('images/customer-loyalty (1) 1.png') }}" alt="">

                        <h4>Build loyalty
                            <p>Turn guests into regulars with a table-booking experience more convenient than your
                                competitors’.</p>
                        </h4>
                    </div>
                </div>
                <div class="row img-text-p">
                    <div class="col-md-6 d-flex align-items-center">

                        <img class="me-3" src="{{ asset('images/megaphone (1) 3.png') }}" alt="">

                        <h4>Expand your reach
                            <p>Put your restaurant in front of more diners with Yuyki’s network that reaches 9x as many
                                people as OpenTable4.</p>
                        </h4>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <img class="me-3" src="{{ asset('images/increasement 1.png') }}" alt="">

                        <h4>Increase margin
                            <p>Pay a predictable monthly price so you can keep costs down and covers up. Never pay cover
                                fees — ever.</p>
                        </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    <div class="container mt-5 header-after text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div>
                    <h4>Which products are right for you?</h4>
                    <p class="mt-3">Capture attention with Yuyki Ads, build a following with Connect, or make booking
                        a
                        <br> table & running your FOH easy with Yuyki Guest Manager.
                        <br> Find your ideal product
                    </p>
                    <div class="button-next text-center">
                        <button><a class="btn" href="{{url('/desktop23')}}"><span>Find your ideal product</span></a></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="image-left mt-5 pt-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('images/Group 506.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <h5>LISTEN TO THE LATEST FULL <br> COMP EPISODE</h5>
                    <h4>Jeff Fenster on creating the next billion dollar brand</h4>
                    <p>Jeff Fenster sits down with Josh to lay out how he overcame the odds during a global pandemic to
                        massively scale his healthy concept.</p>
                    <div class="button-next">
                        <button><a style="text-decoration: underline;" class="btn ms-5 me-5"
                                href="#"><span>Listen now</span></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-bullet mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>2Yuyki Internal Data 2022. Based on average searches in January 2022. <br>
                        3Yuyki Internal Data 2021. Based on average results from a sample study of restaurants that
                        purchased Guest Manager <br>
                        and Yuyki Ads for at least 90 days (in Q2-Q3 2021) versus</p>
                </div>
            </div>
        </div>
    </div>

    <div class="borderss">
        <div class="container">
            <div class="row">

                <div class="col-md-3" id="img-sider">
                    <img src="{{ asset('images/Group 91.png') }}" alt="">
                </div>
                <div class="col-md-3 pt-140 " id="li-bullet">
                    <ul>
                        <li>50 car wash marketing ideas to attract more customers</li>
                        <li>Grow your hair salon business and get more clients with online marketing</li>
                        <li>SEO for financial services: 4 ways to drive business online</li>
                        <li>8 HVAC SEO strategies to improve your online presence</li>
                        <li>5 pressure washing advertising ideas to attract clients</li>
                        <li>SEO for plumbers: 6 ways to boost your online presence</li>
                        <li>6 ways to improve SEO for real estate agents</li>
                        <span style="color: #016FC2;">More Grow resources</span>
                    </ul>
                </div>
                <div class="col-md-3 pt-140 span-text-footer">
                    <h3>Resources to</h3>
                    <div class="span-text d-lg-flex list-unstyled">
                        <li><span id="spamelement">Grow</span></li>
                        <li><span id="spamelement">Advertise</span></li>
                        <li><span id="spamelement">Plan</span></li>
                        <li><span class="span-box1" id="spamelement">Start</span></li>
                    </div>
                    <div class="logo-social">
                        <img src="{{ asset('images/Frame (1).png') }}" alt="">
                        <a href="#!"><i class=' boxed bx bxl-facebook-circle'></i></a>

                        <a href="#!"><i class='bx bxl-instagram-alt'></i></a>

                        <a href="#!"><i class='bx bxl-twitter'></i></a>

                        <a href="#!"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                <div class="col-md-3 download-icon" style="padding-top: 110px">
                    <a class="download-icon-1 " href="">
                        <img class="download-iconn" style="width: 170px; height:160px;"
                            src="{{ asset('images/google-play-png-logo-3799.png') }}" alt="">
                    </a>
                    <a href="">
                        <img style="width: 200px; height:70px;" src="{{ asset('images/pngwing.com (2).png') }}"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5">

        <!-- Footer -->
        <footer class="container">
            <!-- Grid container -->
            <div class="container p-4">

                <section class="">
                    <!--Grid row-->
                    <div class="row link-head">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5>Products</h5>

                            <ol class="mb-0">
                                <li>
                                    <a
                                        href="https://business.yelp.com/products/business-page/?utm_medium=www&utm_source=cons_home&utm_content=header">Business
                                        Page</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/products/business-page/upgrades/?utm_medium=www&utm_source=cons_home&utm_content=header">Upgrade
                                        Package</a>
                                </li>
                                <li>
                                    Yuyki <a
                                        href="https://business.yelp.com/products/yelp-ads/?utm_medium=www&utm_source=cons_home&utm_content=header">Ads</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/products/connect/?utm_medium=www&utm_source=cons_home&utm_content=header">Connect</a>
                                </li>
                            </ol>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5>Solutions</h5>

                            <ol class="mb-0">
                                <li>
                                    <a
                                        href="https://business.yelp.com/solutions/home-local-services/?utm_medium=www&utm_source=cons_home&utm_content=header">Home
                                        and Local Services
                                    </a>
                                </li>
                                <li>
                                    Yuyki <a
                                        href="https://restaurants.yelp.com/?utm_medium=www&utm_source=cons_home&utm_content=header">for
                                        Restaurants</a>
                                </li>
                                <li>
                                    <a
                                        href="https://brands.yelp.com/?utm_medium=www&utm_source=cons_home&utm_content=header">National
                                        and Regional Brands</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/partners/?utm_medium=www&utm_source=cons_home&utm_content=header">Marketing
                                        & Advertising Agencies</a>
                                </li>
                            </ol>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5>Resources</h5>

                            <ol class="mb-0">
                                <li>
                                    Yuyki <a
                                        href="https://blog.yelp.com/category/businesses/?utm_medium=www&utm_source=cons_home&utm_content=header">Business
                                        Blog</a>
                                </li>
                                <li>
                                    <a
                                        href="https://www.yelp-support.com/Yelp_for_Business?utm_medium=www&utm_source=cons_home&utm_content=header">Support</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Events</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/resources/podcasts/?utm_medium=www&utm_source=cons_home&utm_content=header">Podcasts</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/resources/videos/?utm_medium=www&utm_source=cons_home&utm_content=header">Educational
                                        videos</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/business-guide/?utm_medium=www&utm_source=cons_home&utm_content=header">Small
                                        Business Guide</a>
                                </li>
                            </ol>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5>Popular Topics</h5>

                            <ol class="mb-0">
                                <li>
                                    <a
                                        href="https://business.yelp.com/advertise/free-online-business-advertising/?utm_medium=www&utm_source=cons_home&utm_content=header">Free
                                        online advertising
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/grow/types-of-pricing-strategies/?utm_medium=www&utm_source=cons_home&utm_content=header">Types
                                        of pricing strategies</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/grow/how-to-promote-your-business-locally/?utm_medium=www&utm_source=cons_home&utm_content=header">Promote
                                        your business locally</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/start/ultimate-guide-to-starting-a-small-business/?utm_medium=www&utm_source=cons_home&utm_content=header">Guide
                                        to starting a small business</a>
                                </li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/plan/types-of-business-licenses/?utm_medium=www&utm_source=cons_home&utm_content=header">Types
                                        of business licenses</a>
                                </li>
                            </ol>

                        </div>

                        <!--Grid column-->

                    </div>

                    <!--Grid row-->
                </section>

                <!-- Section: Links -->
            </div>
            <!-- Grid container -->
            <div class="container text-copyright text-left pt-5 pb-4">
                Go mobile with the <a class="text-blue"
                    href="https://terms.yelp.com/privacy/en_us/20220831_en_us/">Yuyki for Business app</a>
                for iOS and
                Android.
            </div>
            <!-- Copyright -->
            <div class="text-center Copyright2">
                Copyright © 2004–2023 Yuyki and related marks are registered trademarks of Yuyki
                <a class="text-blue" href="https://terms.yelp.com/privacy/en_us/20220831_en_us/">Privacy Policy Terms
                    of
                    Service</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>

</html>

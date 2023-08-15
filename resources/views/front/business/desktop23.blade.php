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
    <link rel="stylesheet" href="{{asset('css/desktop23.css')}}">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
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
                    <img src="{{asset('images/Frame (1).png')}}" alt="">
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
                            <a class="tel-a" href="tel:+(877) 767-9357"><img class="img-id " src="{{asset('images/phone-call.png')}}"
                                    alt="">(877)
                                767-9357</a>
                        </li>

                    </ul>
                    <div class="btn gx-md-2 btn-navbar" id="button-nav">
                        <button class="btn" type="submit">Login</button>
                        <button class="btn" type="submit">Schedule a call</button>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="arrow-back mt-4">
                    <a href=""><img src="{{asset('images/right-arrow (1) 4.png')}}" alt=""></a>
                    <div class="header-body text-center mt-5">
                        <h3>Welcome to Yelp for Restaurants' Solutions Finder!</h3>
                        <p>First, let's make sure you're in the right place.</p>
                    </div>
                </div>
                <div class="checkbox">
                    <div class="row">
                        <div class="col-md-12 mt-5 pt-2">
                            <p>Are you wanting to make a reservation at a restaurant?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label label1 ms-2 mt-1" for="exampleRadios1">
                                    No, I work at a restaurant.
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label label2 ms-2 mt-1" for="exampleRadios1">
                                    Yes, take me to Yelp.com.
                                </label>   
                            </div>
                            <a class="btn btn-primary mt-3 ps-5 pe-5" href="">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="borderss">
        <div class="container">
            <div class="row">

                <div class="col-md-3" id="img-sider">
                    <img src="{{asset('images/Group 91.png')}}" alt="">
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
                        <img src="{{asset('images/Frame (1).png')}}" alt="">
                        <a href="#!"><i class=' boxed bx bxl-facebook-circle'></i></a>

                        <a href="#!"><i class='bx bxl-instagram-alt'></i></a>

                        <a href="#!"><i class='bx bxl-twitter'></i></a>

                        <a href="#!"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
                <div class="col-md-3 download-icon" style="padding-top: 110px">
                    <a class="download-icon-1 " href="">
                        <img class="download-iconn" style="width: 170px; height:160px;"
                            src="{{asset('images/google-play-png-logo-3799.png')}}" alt="">
                    </a>
                    <a href="">
                        <img style="width: 200px; height:70px;" src="{{asset('images/pngwing.com (2).png')}}" alt="">
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
                <a class="text-blue" href="https://terms.yelp.com/privacy/en_us/20220831_en_us/">Privacy Policy Terms of
                    Service</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>

</html>
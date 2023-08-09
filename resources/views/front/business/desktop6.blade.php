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
    <link rel="stylesheet" href="{{asset('css/desktop6.css')}}">
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
                                <li>
                                    <a
                                        href="https://brands.yelp.com/?utm_medium=www&utm_source=cons_home&utm_content=header">
                                        National and Regional Brands</a></li>
                                <li>
                                    <a
                                        href="https://business.yelp.com/partners/?utm_medium=www&utm_source=cons_home&utm_content=header">
                                        Marketing & Advertising Agencies
                                    </a>
                                </li>
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
                        <button class="btn" type="submit">Verify my free listing</button>
                        <button class="btn" type="submit">Login</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-after text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="ms-3">
                        <h4>Stand out. Attract more<br> customers. Be chosen. </h4>
                        <p>The Upgrade Package combines Yelp’s best tools so you can grab <br> people’s attention and
                            bring in more business. <br> Get started today with a risk-free trial.*</p>
                    </div>
                    <div class="btn btn-left text-start">
                        <button class="btn" type="submit">Try it free</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <img class="img-fluid" class="text-center" src="{{asset('images/Screenshot (62) 1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="li text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="list-unstyled">
                        <li>93% of people on Yelp compare businesses before making a decision.</li>
                    </ol>
                    <p class="mt-1" id="par">Quickly show people you’re the right business for them</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row mt-5">
            <div class="col-md-6 container-grid">
                <div class="img-head">
                    <img class="img-fluid" src="{{asset('images/Group 104.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 container-grid">
                <h4>Stand out in search results</h4>
                <p>
                    Add eye-catching visuals to your listing and get people’s attention while
                    they’re searching for a business like yours. <br>
                    Let potential customers know more about you by highlighting what
                    makes your business special. You can also choose your favorite photos
                    to show off what you do best.

                </p>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 container-grid">
                <div class="img-head">
                    <img class="img-fluid" src="{{asset('images/Group 104.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 container-grid">
                <h4>Convert page views into customers</h4>
                <p>
                    Take control of your Business Page and make it look its best. That way,
                    you can build trust and bring in more customers <br>
                    Put your best photos first, add your logo, and create a portfolio of your
                    best work. Plus, block competitor ads from your page and include a
                    customized button to encourage customer action.

                </p>
            </div>
        </div>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-6 container-grid">
                <div class="img-head">
                    <div class="">
                    <img class="img-fluid" src="{{asset('images/Group 104.png')}}" alt="">
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 container-grid">
                <h4>Reach your community in new ways</h4>
                <p>
                    Share news about discounts, specials, and anything you want potential
                    customers to know. <br>
                    Your posts will be promoted in the Yelp app and through weekly emails
                    sent to people interested in businesses like yours.
                </p>
            </div>
        </div>

    </div>
    <div class="grid-layout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="row grid-image">
                        <h3 class="text-center mb-5">The Upgrade Package includes</h3>
                        <div class="col-md-6 ">

                            <ul class="list-unstyled">
                                <li> <img src="{{asset('images/Component 57.png')}}" alt=""></li>
                                <li><img src="{{asset('images/Component 58.png')}}" alt=""></li>
                                <li><img src="{{asset('images/Component 59.png')}}" alt=""></li>
                                <li><img src="{{asset('images/Component 60.png')}}" alt=""></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li> <img src="{{asset('images/Component 62.png')}}" alt=""></li>
                                <li><img src="{{asset('images/Component 61.png')}}" alt=""></li>
                                <li><img src="{{asset('images/Component 63.png')}}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-7 mt-2 container-grid">
                        <h4>Try the Upgrade Package for free</h4>
                        <p class="ms-2">
                            The Upgrade Package combines all our best features while also saving
                            you 60% off the regular monthly cost of upgrades. It’s a great way to
                            attract attention and convert more customers. Get started today with a
                            risk-free trial.*

                        </p>
                        <div class="btn btn-left">
                            <button class="btn" type="submit">Try it free</button>
                        </div>
                    </div>
                    
                    <div class="col-md-5 text-center ">
                        <div class="img-head">
                            <img src="{{asset('images/Frame (3).png')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="li">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ol class="list-unstyled">
                        <li>* Terms apply <br>
                            1 6/19 survey by SurveyMonkey of people who reported having used Yelp in the prior 3 months
                            <br>
                            2 Portfolio is available for eligible categories only.1 </li>
                    </ol>
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
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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <div class="container-fluid nav-banner " id="nav-banner">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <div class="container-fluid nav-back">
                        <a class="navbar-brand " href="#">
                            <img src="{{ asset('images/f.png') }}" class="ms-3" alt="">
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
                                        <li><a href="{{url('/desktop4')}}">Business Page</a></li>
                                        <li><a href="{{url('/desktop6')}}">Upgrade Package</a></li>
                                        <li><a href="{{url('/desktop8')}}">Yelp Ads</a></li>
                                        <li><a href="{{url('/desktop10')}}">Connect</a></li>
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
                                        <li><a href="https://brands.yelp.com/?utm_medium=www&utm_source=cons_home&utm_content=header"> National and Regional Brands</a></li>
                                        <li><a href="https://business.yelp.com/partners/?utm_medium=www&utm_source=cons_home&utm_content=header"> Marketing & Advertising Agencies</a></li>
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
                                        <li><a href="https://business.yelp.com/business-guide/?utm_medium=www&utm_source=cons_home&utm_content=header">Small Business Guide</a></li>
                                        <li><a href="https://business.yelp.com/resources/?utm_medium=www&utm_source=cons_home&utm_content=header">Resource Center</a></li>
                                        <li><a href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Events</a></li>
                                        <li><a href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Podcasts</a></li>
                                        <li><a href="https://business.yelp.com/resources/events/?utm_medium=www&utm_source=cons_home&utm_content=header">Blog</a></li>
                                    </ul>
                                </li>
                                <li class="pt-md-2">
                                    <a class="tel-a" href="tel:+(877) 767-9357"><img class="img-id "
                                            src="{{asset('images/phone-call.png')}}" alt="">(877)
                                        767-9357</a>
                                </li>

                            </ul>
                            <div class="btn gx-md-2 btn-navbar" id="button-nav">
                                <a class="btn" >Verify my free listing</a>
                                <a class="btn" href="{{url('/desktop4')}}">Login</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="card verify-card verify-card-sm">

                        <div class="card-body">
                            <h2 class="card-title">It's free to be on</h2>
                            <p class="card-text"><img class="card-imges" src="{{ asset('images/Frame (1).png') }}"
                                    alt="">
                            </p>
                            <p class="card-text">&#x2713; Update your business information</p>
                            <p class="card-text">&#x2713; Receive and respond to messages</p>
                            <p class="card-text"> &#x2713; Respond to reviews</p>
                            <h6 class="card-text"><a href="{{url('/Lets_Start')}}" class="btn" id="btn-banner">Verify my free
                                    listing</a>
                            </h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-center">
                    <h6 class="content-text-h6">Yelp for Business provides free and
                        paid advertising solutions for your small business</h6>
                </div>
                <div class="flex-img d-md-flex text-center" id="icons">
                    <div class="col-md-6 col-sm-12 " id="con1">
                        <img id="img1" src="{{ asset('images/Group 76.png') }}" alt="">
                        <h4>80+ million people</h4>
                        <p>
                            visit Yuyki each month to find restaurants
                            ,home services, and more1 </p>
                    </div>
                    <div class="col-md-6 col-sm-12" id="con2">
                        <img id="img2" src="{{ asset('images/ff.png') }}" alt="">
                        <h4>83% of users</h4>
                        <p>hire or buy from a businessthey
                            found on Yuyki 2
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="shadow-top mr-10">
        <div class="shadow-bottom">
            <div class="shadow-right">
                <div class="content-txt">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 texth2 d-flex justify-content-center text-center">
                                <h2>Yelp makes it easy to connect with new
                                    customers and grow your business</h2>
                            </div>
                            <div class="col-md-6 text-img" id="side-img">
                                <img src="{{ asset('images/Group 85.png') }}" alt="">
                            </div>

                            <div class="col-md-6 text-img ">
                                <div class="div-content-box-side">
                                    <h6>BUSINESS PAGE</h6>
                                    <h3>Help people get to know you</h3>
                                    <p>Having a strong presence on Yelp helps you establish trust with
                                        potential customers. Manage your page for free or upgrade to stand out
                                        from the competition.</p>
                                    <p> &#x2713; Update your business info so people can find you</p>
                                    <p> &#x2713; Respond to reviews and messages as soon as they come in</p>
                                    <p> &#x2713; Add photos to showcase the best of your business</p>
                                    <a href="">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="txt-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="div-content-box-side"style="padding-bottom: 100px">
                                    <h6>BUSINESS PAGE</h6>
                                    <h3>Help people get to know you</h3>
                                    <p>Having a strong presence on Yelp helps you establish trust with
                                        potential customers. Manage your page for free or upgrade to stand out
                                        from the competition.</p>
                                    <p> &#x2713; Reach 3x more potential customers3
                                    </p>
                                    <p> &#x2713; Create and run your ad in minutes</p>
                                    <p> &#x2713; Only pay when interested people click on your ad</p>
                                    <a href="">Learn more</a>
                                </div>
                            </div>
                            <div class="col-md-6" id="side-img">
                                <img src="{{ asset('images/Group 84 (1).png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-txt">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-img" id="side-img">
                                <img src="{{ asset('images/Group 98.png') }}" alt="">
                            </div>
                            <div class="col-md-6 text-img" style="padding-bottom: 100px">
                                <div class="div-content-box-side">
                                    <h6>Yuyki Connect</h6>
                                    <h3>Bring your business to life with Yuyki
                                        Connect</h3>
                                    <p>Yelp Connect lets you post regular updates so you can help potential
                                        customers learn more about your business.</p>
                                    <p> &#x2713; Creating a post is fast and easy</p>
                                    <p> &#x2713; Post about what’s new, what’s hot and what’s unique about
                                        &nbsp;&nbsp;your business</p>
                                    <p> &#x2713; Your posts are promoted in emails to Yelp users every week</p>
                                    <a href="">Learn more</a>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-grid">Find the right solutions for your business</p>
                    <div class="row">
                        <div class="col-md-6 text-px mt-0.5 d-flex align-items-center ">
                            <img class="image-fluid img-grided" src="{{ asset('images/Component 16.png') }}"
                                alt="">
                            <div class="row">
                                <div class="texted">
                                    <h3>Help people get to know you</h3>
                                    <p>Turn searchers into diners and diners into regulars with marketing
                                        and front-of-house tools like Waitlist, Reservations, and Takeout.</p>
                                    <a href="">Learn more</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 text-pl mt-1 d-flex align-items-center ">
                            <img class="image-fluid" src="{{ asset('images/Component 22.png') }}" alt="">
                            <div class="row">
                                <div class="texted">
                                    <h3>Home and Local Services</h3>
                                    <p>Grow your home and local services business with a range of
                                        solutions from Yelp that help attract more customers.</p>
                                    <a class="a-link" href="">Learn more </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-px mt-4 d-flex align-items-center">
                                <img class="image-fluid" src="{{ asset('images/Component 17.png') }}" alt=""
                                    style="height: 82px;">
                                <div class="row">
                                    <div class="texted">
                                        <h3>National and Regional Brands</h3>
                                        <p>Explore Yelp’s solutions for national, regional, and franchise
                                            businesses including targeted local advertising, upgraded business
                                            pages, and dedicated support.</p>
                                        <a href="">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 text-pl mt-4 d-flex align-items-center">
                                <img class="image-fluid" src="{{ asset('images/Component 23.png') }}"
                                    alt="">
                                <div class="row">
                                    <div class="texted">
                                        <h3>Marketing & Advertising Agencies</h3>
                                        <p>Connect your clients with high purchase intent customers at scale.
                                            Join the Yelp Advertising Partner Program.</p>
                                        <a class="a-link" href="">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="mail-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Business resources, delivered to <br> your inbox</h2>
                    <p id="mail-bar-p1">Get the latest blog content, info on virtual events, and the occasional
                        freebie.
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-outline  form-white mb-4">
                                    <input style="background-color:#d9d9d9;" type="email" id="form5Example2"
                                        class="form-control py-2" placeholder="Gmail.com" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <p id="mail-bar-p2">By continuing, you agree to Yuyki <span style="color: #016FC2;">Terms of
                            Service</span> and acknowledge Yuuki’s <span style="color: #016FC2;">Privacy
                            Policy</span>.Email</p>
                    <div class="pt-4">
                        <a style="background-color:#d9d9d9;" href="#" class="btn">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="article-grid ">
        <div class="container  ">
            <div class="row justify-content-center text-center">
                <div class="col-md-4 article-grid-col  ">
                    <img src="{{ asset('images/Rectangle 74.png') }}" alt="">
                    <h3>How to add a business to Yelp in 3 simple steps</h3>
                    <a id="article-grid-a" href="">Read article</a>
                </div>
                <div class="col-md-4 article-grid-col ">
                    <img src="{{ asset('images/Rectangle 75.png') }}" alt="">
                    <h3>How to write a great business description for review and social media sites</h3>
                    <a href="">Read article</a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/Rectangle 76.png') }}" alt="">
                    <h3>5 free things you didn’t know you could doon your Yuyki Page</h3>
                    <a href="">Read article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Ready to get started? It’s free, easy, <br> and only takes a few minutes.
                    </h2>
                    <div class="text-center">
                        <a href="{{url('/Lets_Start')}}" style="background-color:#d9d9d9;" class="btn padding-button ">Verify my free
                            listing</a>
                    </div>
                    <ol>
                        <li>Comscore Media Metrix®, as of March 2022</li>
                        <li>Based on a survey conducted by Yelp in August 2022. Methodology used: ComScore demographics
                            and people who reported having used Yelp in the prior 3 months
                        </li>
                        <li>Yelp internal data 2019</li>
                    </ol>
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

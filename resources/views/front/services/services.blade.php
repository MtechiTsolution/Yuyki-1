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
    <link rel="stylesheet" href="{{asset('css/services.css')}}">
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="bg-image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="logo-img mt-2">
                        <img class="logo-png" src="{{asset('images/Frame.png')}}" alt="">
                        <img class="float-end me-5" src="{{asset('images/Group 1.png')}}" alt="">
                    </div>
                    <div class="row text-center" id="text-img">
                        <div class="col-md-4">
                            <div class="angle-rotated">
                                <h6>Best Restaurants near</h6>
                                <img src="{{asset('images/Rectangle 378.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="center-text">
                                <h6>Best Handman 
                                    <br>near</h6>
                                <img src="{{asset('images/Rectangle 378.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="angle-rotate">
                                <h6>Auto Services</h6>
                                <img src="{{asset('images/Rectangle 378.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rotate-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-2" id="left-image">
                    <img src="{{asset('images/Frame 232 (1).png')}}" alt="">
                </div>
                <div class="col-2">
                    <img src="{{asset('images/Arrow 1 (1).png')}}" alt="">
                </div>
                <div class="col-4">
                    <img class="center-img" src="{{asset('images/Group (1).png')}}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="arrow-side" src="{{asset('images/Arrow 2.png')}}" alt="">
                </div>
                <div class="col-2" id="right-image">
                    <img class="img-side" src="{{asset('images/Frame (2).png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="filter mt-5">
        <div class="container">
            <div class="row">

                <div class="col-3 fixed-aside " id="left">

                    <h6 class="ms-2">Filters</h6>
                    <div class="d-flex">
                        <div class="buttons">
                            <input style="width: 30px;" type="number" placeholder="$">
                            <input style="width: 30px;" type="number" placeholder="$$">
                            <input style="width: 40px;" type="number" placeholder="$$$">
                            <input style="width:50px;" type="number" placeholder="$$$$">
                            <!-- <button type="button" class="btn">$</button>
                            <button type="button" class="btn">$$</button>
                            <button type="button" class="btn">$$$</button>
                            <button type="button" class="btn">$$$$</button> -->
                        </div>
                    </div>
                    <div class="line-after">
                    </div>
                    <div class="second-text pt-2">
                        <p>Suggested</p>
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Open Now 3:09 AM
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Offers Delivery
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outdoor Seating
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Good for Kids
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Good for Groups
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Dogs Allowed
                            </label>
                        </div>
                    </div>
                    <div class="line-after">
                    </div>
                    <div class="third-text pt-2">
                        <p>Suggested</p>
                        <div class="button-third">
                            <button type="button" class="btn">Real Estate</button>
                            <button type="button" class="btn">General Contractors</button>
                            <button type="button" class="btn">Home Cleaning</button>
                            <button type="button" class="btn">Painters</button>
                        </div>
                    </div>
                    <div class="line-after">
                    </div>
                    <div class="fourth-text pt-2">
                        <p>Features</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Offering a Deal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Open to All
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Offers Military Discount
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Accepts Cryptocurrency
                            </label>
                        </div>
                        <a href="#">See all</a>
                        <div class="line-after">
                        </div>
                    </div>

                    <div class="fivth-text pt-2">
                        <p>Neighborhoods</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Alamo Square
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Anza Vista
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ashbury Heights
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Balboa Terrace
                            </label>
                        </div>
                        <a href="#">See all</a>
                        <div class="line-after">
                        </div>
                    </div>
                    <div class="sixth-text pt-2">
                        <p>Distance</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Bird's-eye View
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Driving (5 mi.)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Biking (2 mi.)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Walking (1 mi.)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Within 4 blocks
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-7" id="center">
                    <div class="row">

                        <div class="col-8 pt-3" id="text-center">
                            <p>Top 10 Best Restaurants Nearby in San Francisco, California
                            </p>
                        </div>
                        <div class="col-4">
                            <div class="dropdown float-start d-flex">
                                <a class="btn btn dropdown-toggle" href="#" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort:<span class="span-recomm">Recommanded</span>
                                </a>
                                <!-- <p class="i-con"><img src="images/Group 416.png" alt=""></p> -->

                                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Recommanded</a></li>
                                    <li><a class="dropdown-item" href="#">High Rated</a></li>
                                    <li><a class="dropdown-item" href="#">Most Reviewed</a></li>
                                </ul>
                                <!-- <p>&#9432;</p> -->
                            </div>

                        </div>

                    </div>
                    <div class="text-p">
                        <p>Sponsored Results<img style="padding-left: 5px;" src="images/Group 416.png" alt=""></p>
                    </div>
                    <div class="dotted-container d-md-flex">
                        <ul class="list-unstyled">
                            <li><h6>Free price estimates from local Handymen</h6></li>
                            <li><p>Tell us about your project and get help from sponsored <br>
                                businesses.</p></li>
                                <li><button type="button" class="btn hovered">General Contractors</button></li>
                        </ul>                           
                                <img src="images/settings (1) 1.png" alt="">
                            </div>
                       






                    <div class="line-aftered">
                    </div>
                    <div class="side-text-image pt-4 d-flex">
                        <img style="height: 187px;" src="{{asset('images/Rectangle 397 (1).png')}}" alt="">
                        <ul class="mt-2">
                            <li>
                                <h6 class="">Construvelasquez</h6>
                            </li>
                            <li><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i><i class='bx bxs-star'></i>&nbsp;&nbsp;
                                <span>320</span>
                            </li>
                            <li class="mt-2">
                                <a class="btn" href="">General Contractors</a>
                                <span>edit</span>
                                <!-- <a class="btn" href="">mexicen</a> -->
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/reward (1) 1.png')}}" alt="">&nbsp;&nbsp;<span
                                    class="span-side">satisfaction guaranteed</span> <img src="{{asset('images/customer-review 1.png')}}"
                                    alt="">&nbsp;&nbsp;<span class="span-side">Beat or match prices</span>
                            </li>
                            <li class="mt-2">
                                <span style="color: #FF0505;">Closed</span>&nbsp;<span>2:00am</span>
                            </li>
                            <li class="mt-2">
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}"
                                        alt="">&nbsp;&nbsp;&nbsp;Delivery</span>&nbsp;&nbsp;&nbsp;
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}" alt="">&nbsp;&nbsp;&nbsp;Takeout</span>
                            </li>
                        </ul>


                    </div>
                    <div class="image-ellipse">
                        <img src="{{asset('images/Ellipse 119.png')}}" alt="">
                        <img src="{{asset('images/Ellipse 120.png')}}" alt="">
                        <img src="{{asset('images/Ellipse 121.png')}}" alt="">
                        <img src="{{asset('images/Group 441.png')}}" alt="">
                    </div>
                    <div class="mt-2 ms-5">
                        <span class="hour-text">Responds in about <span class="hour-text-2" style="color: #016FC2;">1 hour</span>
                             </span>
                            <span class="line-end"><img class="me-2" src="{{asset('images/discount (1) 1.png')}}" alt=""><span>7 locals recently requested a consultation</span></span>
                    </div>
                    <div class="line-aftered">
                    </div>
                    <div class="side-text-image pt-4 d-flex">
                        <img style="height:187px;" src="{{asset('images/Rectangle 398.png')}}" alt="">
                        <ul class="mt-2">
                            <li>
                                <h6 class="">Construvelasquez</h6>
                            </li>
                            <li><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i>&nbsp;&nbsp;
                                <span>320</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/check (4) 1.png')}}" alt=""> <span class="claimed" style="color: #016FC2;">Claimed</span>
                                <a class="btn" href="">Printers</a>
                                <a class="btn mt-1" href="">Siding</a>
                                <span>edit</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/calculator (1) 1.png')}}" alt="">&nbsp;&nbsp;<span
                                    class="span-side">free estimates</span> <img src="{{asset('images/conversation (3) 1.png')}}"
                                    alt="">&nbsp;&nbsp;<span class="span-side">Consultations available</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/conversation (2) 1.png')}}" alt="">

                            </li>
                            <li class="mt-2">
                                <p class="p-right">Jorge is the man! honest and hardworking. had problem with door frame and broken drawers. he made the job look super easy.
                                </p>

                            </li>
                            <li class="mt-2">
                                <span style="color: #FF0505;">Closed</span>&nbsp;<span>2:00am</span>
                            </li>
                            <li class="mt-2">
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}"
                                        alt="">&nbsp;&nbsp;&nbsp;Delivery</span>&nbsp;&nbsp;&nbsp;
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}" alt="">&nbsp;&nbsp;&nbsp;Takeout</span>
                            </li>
                        </ul>


                    </div>
                    <div class="line-aftered">
                    </div>
                    <div class="side-text-image pt-4 d-flex">
                        <img style="height: 187px;" src="{{asset('images/Rectangle 402 (1).png')}}" alt="">
                        <ul class="mt-2">
                            <li>
                                <h6 class="">Willie B. Jefferson-New City Realty</h6>
                            </li>
                            <li><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i>&nbsp;&nbsp;
                                <span>320</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/check (4) 1.png')}}" alt=""> <span class="claimed" style="color: #016FC2;">Verified License</span>
                                <a class="btn" href="">Real Estate agents</a>
                                <span>edit</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/parental-control 1.png')}}" alt="">&nbsp;&nbsp;<span
                                    class="span-side">Family owned & operated</span> <img src="{{asset('images/kids 2.png')}}"
                                    alt="">&nbsp;&nbsp;<span class="span-side">Family owned & operated</span>
                            </li>
                            <li class="mt-2">
                                <span style="color: #FF0505;">Closed</span>&nbsp;<span>2:00am</span>
                            </li>
                            <li class="mt-2">
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}"
                                        alt="">&nbsp;&nbsp;&nbsp;Delivery</span>&nbsp;&nbsp;&nbsp;
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}" alt="">&nbsp;&nbsp;&nbsp;Takeout</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/conversation (2) 1.png')}}" alt="">

                            </li>
                            <li class="mt-2">
                                <p class="p-right">Jorge is the man! honest and hardworking.
                                </p>

                            </li>
                        </ul>
                    </div>
                    <div class="line-aftered">
                    </div>
                    <div class="side-text-image pt-4 d-flex">
                        <img style="height: 187px;" src="{{asset('images/Rectangle 397 (1).png')}}" alt="">
                        <ul class="mt-2">
                            <li>
                                <h6 class="">Construvelasquez</h6>
                            </li>
                            <li><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                    class='bx bxs-star'></i><i class='bx bxs-star'></i>&nbsp;&nbsp;
                                <span>320</span>
                            </li>
                            <li class="mt-2">
                                <a class="btn" href="">General Contractors</a>
                                <span>edit</span>
                                <!-- <a class="btn" href="">mexicen</a> -->
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/reward (1) 1.png')}}" alt="">&nbsp;&nbsp;<span
                                    class="span-side">satisfaction guaranteed</span> <img src="{{asset('images/customer-review 1.png')}}"
                                    alt="">&nbsp;&nbsp;<span class="span-side">Beat or match prices</span>
                            </li>
                            <li class="mt-2">
                                <span style="color: #FF0505;">Closed</span>&nbsp;<span>2:00am</span>
                            </li>
                            <li class="mt-2">
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}"
                                        alt="">&nbsp;&nbsp;&nbsp;Delivery</span>&nbsp;&nbsp;&nbsp;
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}" alt="">&nbsp;&nbsp;&nbsp;Takeout</span>
                            </li>
                        </ul>


                    </div>
                    <div class="image-ellipse">
                        <img src="{{asset('images/Ellipse 119.png')}}" alt="">
                        <img src="{{asset('images/Ellipse 120.png')}}" alt="">
                        <img src="{{asset('images/Ellipse 121.png')}}" alt="">
                        <img src="{{asset('images/Group 441.png')}}" alt="">
                    </div>
                    <div class="mt-2 ms-5">
                        <span class="hour-text">Responds in about <span class="hour-text-2" style="color: #016FC2;">1 hour</span>
                             </span>
                            <span class="line-end"><img class="me-2" src="{{asset('images/discount (1) 1.png')}}" alt=""><span>7 locals recently requested a consultation</span></span>
                    </div>
                    <div class="line-aftered">
                    </div>
                    <div class="side-text-image pt-4 d-flex">
                        <img style="height:187px;" src="{{asset('images/Rectangle 398.png')}}" alt="">
                        <ul class="mt-2">
                            <li>
                                <h6 class="">Construvelasquez</h6>
                            </li>
                            <li><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i>&nbsp;&nbsp;
                                <span>320</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/check (4) 1.png')}}" alt=""> <span class="claimed" style="color: #016FC2;">Claimed</span>
                                <a class="btn" href="">Printers</a>
                                <a class="btn mt-1" href="">Siding</a>
                                <span>edit</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/calculator (1) 1.png')}}" alt="">&nbsp;&nbsp;<span
                                    class="span-side">free estimates</span> <img src="{{asset('images/conversation (3) 1.png')}}"
                                    alt="">&nbsp;&nbsp;<span class="span-side">Consultations available</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/conversation (2) 1.png')}}" alt="">

                            </li>
                            <li class="mt-2">
                                <p class="p-right">Jorge is the man! honest and hardworking. had problem with door frame and broken drawers. he made the job look super easy.
                                </p>

                            </li>
                            <li class="mt-2">
                                <span style="color: #FF0505;">Closed</span>&nbsp;<span>2:00am</span>
                            </li>
                            <li class="mt-2">
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}"
                                        alt="">&nbsp;&nbsp;&nbsp;Delivery</span>&nbsp;&nbsp;&nbsp;
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}" alt="">&nbsp;&nbsp;&nbsp;Takeout</span>
                            </li>
                        </ul>


                    </div>
                    <div class="line-aftered">
                    </div>
                    <div class="side-text-image pt-4 d-flex">
                        <img style="height: 187px;" src="{{asset('images/Rectangle 402 (1).png')}}" alt="">
                        <ul class="mt-2">
                            <li>
                                <h6 class="">Willie B. Jefferson-New City Realty</h6>
                            </li>
                            <li><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i
                                class='bx bxs-star'></i><i class='bx bxs-star'></i>&nbsp;&nbsp;
                                <span>320</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/check (4) 1.png')}}" alt=""> <span class="claimed" style="color: #016FC2;">Verified License</span>
                                <a class="btn" href="">Real Estate agents</a>
                                <span>edit</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/parental-control 1.png')}}" alt="">&nbsp;&nbsp;<span
                                    class="span-side">Family owned & operated</span> <img src="images/kids 2.png"
                                    alt="">&nbsp;&nbsp;<span class="span-side">Family owned & operated</span>
                            </li>
                            <li class="mt-2">
                                <span style="color: #FF0505;">Closed</span>&nbsp;<span>2:00am</span>
                            </li>
                            <li class="mt-2">
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}"
                                        alt="">&nbsp;&nbsp;&nbsp;Delivery</span>&nbsp;&nbsp;&nbsp;
                                <span><img src="{{asset('images/check-mark (2) 1.png')}}" alt="">&nbsp;&nbsp;&nbsp;Takeout</span>
                            </li>
                            <li class="mt-2">
                                <img src="{{asset('images/conversation (2) 1.png')}}" alt="">

                            </li>
                            <li class="mt-2">
                                <p class="p-right">Jorge is the man! honest and hardworking.
                                </p>

                            </li>
                        </ul>
                    </div>

                </div>
                <aside class="col-2 fixed-aside" id="right">
                    <div style="width: 100%"><iframe width="250" height="600" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=250&amp;height=600&amp;hl=en&amp;q=San%20Francisco+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                href="https://www.maps.ie/population/">Calculate population in area</a></iframe></div>
                </aside>
            </div>
        </div>
    </div>
</body>

</html>
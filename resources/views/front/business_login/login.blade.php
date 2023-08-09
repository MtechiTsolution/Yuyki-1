<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yuyki</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{('css/business_login.css')}}">
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
    <!-- nav -->
    <div class="navbar1">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/f.png" alt="" width="95" height="46">
                </a>
                <img class="d-flex" src="images/contact 1.png" alt="" width="35" height="35">
            </div>
        </nav>
    </div>
    <!-- arrow -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="arrow">
                    <img src="images/right-arrow (1) 2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- welcome heading -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head-welcome text-center">
                    <img src="images/Welcome.png" alt="">
                    <p class="mt-3">By continuing, you agree to Yelp’s <span> <a href="#">Terms of Service</a>  </span><br> and acknowledge our 
                       <span><a href="#">Privacy Policy.</a></span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- login -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 " id="login">
                <input style="background-color:#d9d9d9;" type="email" id="form5Example2"
                class="form-control w-75 mx-auto" placeholder="Email"/>
                <input style="background-color:#d9d9d9;" type="password" id="password"
                 placeholder="Password" class="form-control pass w-75 mx-auto" />
                 <div class="row">
                    <div class="col-md-10 col-sm-10 col-10">
                        <a class="float-end" href=""><span style="color: #016FC2;">Forgot password?</span></a>
                    </div>
                 </div>
                 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="btns">
                    <a id="btn" href="#" class="btn w-50 mx-auto col-12">Login</a>
                    <a href="#" class="btn col-12 w-50 mx-auto">Send a Login link to your email</a>
                    <p>Don’t have an account? <span><a href="#">Claim your business on Yelp.</a></span></p>
                    <span id-="span-or">or</span>
                    </div>
                 </div>
            </div>
        </div>
    </div>
<div class="container loginbutton">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="btnn">
                <a id="btn" href="#" class="btn w-50 mx-auto col-12 mb-2 "><img class="float-start" src="images/Group 398.png" alt=""> <p>Continue with Google</p></a>
                <a id="btnf" href="#" class="btn w-50 mx-auto col-12 mb-2 "><img class="float-start" src="images/Group 1.png" alt=""><p>Continue with Facebook</p></a>
                <a id="btna" href="#" class="btn w-50 mx-auto col-12 mb-2 "><img class="float-start" src="images/Group 400.png" alt=""><p>Continue with Iphone</p></a>
            </div>
         </div>
          
        </div>
    </div>
</div>
</body>
</html>
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
    <link rel="stylesheet" href="{{asset('css/lets_strart.css.css')}}">
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
    <!-- nav -->
    <div class="navbar1">
        <nav class="navbar navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/f.png" alt="" width="95" height="46">
                </a>
                <div class="d-flex">
                    <img class="right-nav-notification" src="{{asset('images/notification 3.png')}}" alt="" width="33"
                        height="33">
                    <img src="images/Group 62.png" alt="" width="35" height="35">
                </div>
            </div>
        </nav>
    </div>
    <!-- arrow -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="arrow">
                    <a href="{{url('/business')}}"><img src="{{asset('images/right-arrow (1) 2.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome heading -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="head-welcome text-center">
                    <img src="{{asset('images/Frame.png')}}" alt="">
                </div>
                <div class="mt-3 head-p text-center">
                    <h4>Hello! Let’s start with your business name</h4>
                    <p>We’ll use this information to help you claim your Yuyki page. Your business will <br>
                        come up automatically if it is already listed.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- login -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 " id="login">
                <input style="background-color:#d9d9d9;" type="email" id="form5Example2"
                    class="form-control w-75 mx-auto py-3" placeholder="Your Business Name" />
            </div>
        </div>
    </div>
</body>

</html>

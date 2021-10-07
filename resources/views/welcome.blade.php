<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Other css -->

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}">

    <title>DueLove</title>
</head>

<body>

<!-- preloader start here -->
<div class="preloader" style="display: none;">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->


<!-- ==========Header Section Starts Here========== -->
<header class="header-section">
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="container col-md-12 text-center w-50 p-3">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->

<!-- ==========login Section start Here========== -->
<div class="login-section padding-tb">
    <div class=" container mt-5">
        <div class="account-wrapper">
            <h3 class="title">Admin Login</h3>
            <form class="account-form" method="POST" action="login">
                <div class="form-group">
                    @csrf
                    <input required name="email" placeholder="Email" type="email"/>
                    <input required name="password" placeholder="Password" type="password"/>
                    <button type="submit" class="d-block lab-btn"><span>Login</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ==========Login Section ends Here========== -->


<!-- All Scripts -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery_002.js')}}"></script>
<script src="{{asset('assets/js/swiper.js')}}"></script>
<script src="{{asset('assets/js/waypoints.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>


</body>
</html>
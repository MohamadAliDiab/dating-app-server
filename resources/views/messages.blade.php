<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Other css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <div class="logo">
                </div>
                <a href="messages.blade.php" class="navbar-right">
                    <i class="material-icons" style="font-size:36px">message</i>
                </a>
                <a href="appPics.blade.php" class="col-md-2">
                    <i class="material-icons" style="font-size:36px">photo</i>
                </a>
                <div class="menu-area">
                    <a href="{{route('logout')}}" class="signup"><span>LOG OUT</span> </a>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header Section Ends Here========== -->

<!-- ================ Messages approval Section Start Here =============== -->
<section class="group-section padding-tb bg-img">
    <div class="container">
        <div class="section-header">
            <h2>Recently sent messages</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-4">
                <div class="col-xl-6 col-12">
                    <div class="group-item lab-item">
                        <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                            <div class="lab-content">
                                <h4>From: user</h4>
                                <h4>To: user</h4>
                                <p>message content</p>
                                <button type="button" class="btn btn-success">Approve msg</button>
                                <button type="button" class="btn btn-danger mt-2">Reject msg</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="group-item lab-item">
                        <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                            <div class="lab-content">
                                <div class="lab-content">
                                    <h4>From: user</h4>
                                    <h4>To: user</h4>
                                    <p>message content</p>
                                    <button type="button" class="btn btn-success">Approve msg</button>
                                    <button type="button" class="btn btn-danger mt-2">Reject msg</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="group-item lab-item">
                        <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                            <div class="lab-content">
                                <h4>From: user</h4>
                                <h4>To: user</h4>
                                <p>message content</p>
                                <button type="button" class="btn btn-success">Approve msg</button>
                                <button type="button" class="btn btn-danger mt-2">Reject msg</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="group-item lab-item">
                        <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                            <div class="lab-content">
                                <h4>From: user</h4>
                                <h4>To: user</h4>
                                <p>message content</p>
                                <button type="button" class="btn btn-success">Approve msg</button>
                                <button type="button" class="btn btn-danger mt-2">Reject msg</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Messages approval Section Start Here =============== -->


<!-- All Scripts -->
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery_002.js')}}"></script>
<script src="{{asset('assets/js/swiper.js')}}"></script>
<script src="{{asset('assets/js/waypoints.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>

</body></html>
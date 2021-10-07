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

<!-- ================ Approving Pictures starts here=============== -->
<section class="member-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h2>The following pictures need approval!</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-3 g-md-4">
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Andrea Guido</a> </h6>
                                <button type="button" class="btn btn-success">Approve picture</button>
                                <button type="button" class="btn btn-danger mt-2">Reject picture</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Gihan-Fernando</a></h6>
                                <button type="button" class="btn btn-success">Approve picture</button>
                                <button type="button" class="btn btn-danger mt-2">Reject picture</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Sweet Admin</a></h6>
                                <button type="button" class="btn btn-success">Approve picture</button>
                                <button type="button" class="btn btn-danger mt-2">Reject picture</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Gyan-Baffour</a></h6>
                                <button type="button" class="btn btn-success">Approve picture</button>
                                <button type="button" class="btn btn-danger mt-2">Reject picture</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Teszt Eleking</a></h6>
                                <button type="button" class="btn btn-success">Approve picture</button>
                                <button type="button" class="btn btn-danger mt-2">Reject picture</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <div class="lab-item member-item style-1">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Zeahra Guido</a>
                                </h6>
                                <button type="button" class="btn btn-success">Approve picture</button>
                                <button type="button" class="btn btn-danger mt-2">Reject picture</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ Approving Pictures ends here =============== -->


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
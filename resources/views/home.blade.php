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
                <div class="menu-area col-lg-4">
                    <div class="col-lg-8">
                        <a href="http://127.0.0.1:8000/home" class="ps-5" >
                            <i class="material-icons" style="font-size:36px">home</i>
                        </a>
                        <a href="http://127.0.0.1:8000/messages" class="ps-5">
                            <i class="material-icons" style="font-size:36px">message</i>
                        </a>
                        <a href="http://127.0.0.1:8000/pics" class="ps-5">
                            <i class="material-icons" style="font-size:36px">photo</i>
                        </a>
                    </div>
                    <a href="{{route('logout')}}" class="signup ms-3">
                        <span>LOG OUT</span> </a>

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

<!-- ================ Highlighting user Section starts here =============== -->
<section class="top-member-section padding-tb">
    <div class="container">
        <div class="section-header">
            <h2>List of users</h2>
        </div>
        <div class="section-wrapper">
            <div class="grid-memberlist" style="position: relative; height: 650.4px;">
                <div class="grid-member filter-item boy" style="position: absolute; left: 0px; top: 0px;">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/pics/08.jpg')}}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Angelina</a> </h6>
                                <button type="button" class="btn btn-success">Add to list of Highlighted</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item girl" style="position: absolute; left: 235.2px; top: 0px;">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/pics/09.jpg')}}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Andrea Guido</a> </h6>
                                <button type="button" class="btn btn-danger">Remove from list of highlighted</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy" style="position: absolute; left: 470.4px; top: 0px;">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/pics/05.jpg')}}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Jene Aiko</a> </h6>
                                <button type="button" class="btn btn-danger">Remove from list of highlighted</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item girl" style="position: absolute; left: 705.6px; top: 0px;">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/pics/10.jpg')}}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Anna haek</a> </h6>
                                <button type="button" class="btn btn-success">Add to list of Highlighted</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-member filter-item boy" style="position: absolute; left: 940.8px; top: 0px;">
                    <div class="lab-item member-item style-1 style-2">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{asset('assets/pics/06.jpg')}}" alt="member-img">
                            </div>
                            <div class="lab-content">
                                <h6><a href="">Andrean Puido</a> </h6>
                                <button type="button" class="btn btn-success">Add to list of Highlighted</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
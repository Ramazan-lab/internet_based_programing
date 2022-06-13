<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','title yok')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/home')}}/assets/img/favicon.ico">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/animated-headline.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('asset/home')}}/assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('asset/home')}}/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('asset/home')}}/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/treatments">treatments</a></li>
                                            <li><a href="/references">references</a></li>
                                            <li><a href="/home/randevu">Randevularım</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <li class="nav-item dropdown bg-warning">
                                    @auth
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <h3> {{ Auth::user()->name }}</h3>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/admin">Dashboard</a>
                                        <a class="dropdown-item" href="/user/profile">Profile</a>
                                        <form action="/logout" method="post">@csrf<button class="dropdown-item" type="submit">Log out</button></form>
                                    </div>
                                    @else
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <h3> USER ISLEMLERI</h3>
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/register">Sign up</a>
                                        <a class="dropdown-item" href="/login">Log in</a>
                                      </div>
                                    @endauth
                                  </li> 
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="/randevu" class="btn header-btn">Make an Appointment</a>
                                </div>
                               
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
@section('content')
@show


<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{asset('asset/home')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('asset/home')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/popper.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('asset/home')}}/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('asset/home')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('asset/home')}}/assets/js/wow.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/animated.headline.js"></script>
<script src="{{asset('asset/home')}}/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="{{asset('asset/home')}}/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('asset/home')}}/assets/js/jquery.nice-select.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('asset/home')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/waypoints.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/jquery.countdown.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="{{asset('asset/home')}}/assets/js/contact.js"></script>
<script src="{{asset('asset/home')}}/assets/js/jquery.form.js"></script>
<script src="{{asset('asset/home')}}/assets/js/jquery.validate.min.js"></script>
<script src="{{asset('asset/home')}}/assets/js/mail-script.js"></script>
<script src="{{asset('asset/home')}}/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('asset/home')}}/assets/js/plugins.js"></script>
<script src="{{asset('asset/home')}}/assets/js/main.js"></script>

</body>
</html>
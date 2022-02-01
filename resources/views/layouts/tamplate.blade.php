
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<title>Casina Partners</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/icofont.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/swiper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/lightcase.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontoffice/css/style.min.css') }}">
    <script src="{{ asset('assets/frontoffice/js/vendor/jquery-3.6.0.min.js') }}"></script>
</head>

<body>
	<body>
        <!-- preloader start here -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader ending here -->

        <!-- scrollToTop start here -->
        <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
        <!-- scrollToTop ending here -->

        <!-- ==========shape image Starts Here========== -->
        <div class="body-shape">
            <img src="{{ asset('assets/frontoffice/images/shape/body-shape.png') }}" alt="shape">
        </div>
        <!-- ==========shape image end Here========== -->




        <!-- ==========Header Section Starts Here========== -->
        <header class="header-section">
            <div class="container">
                <div class="header-holder d-flex flex-wrap justify-content-between align-items-center">
                    <div class="brand-logo d-none d-lg-inline-block">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/frontoffice/images/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu-part">
                        <div class="header-top">
                            <div class="header-top-area">
                                <ul class="left">
                                    <li>
                                        <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                                    </li>
                                </ul>
                                <ul class="social-icons d-flex align-items-center">
                                    <li>
                                        <a href="#" class="fb"><i class="icofont-facebook"></i></a>
                                    </li>

                                </ul>
                                @if(!Auth::guard('users')->check())
                                    <a href="{{ route('login') }}"><i class="icofont-ui-user"></i> Connexion</a>
                                @else
                                    <a href="{{ route('user.ticket') }}"><i class="icofont-ui-user"></i> {{ Auth::guard('users')->user()->name }} </a>
                                @endif
                            </div>
                        </div>
                        <div class="header-bottom">
                            <div class="header-wrapper justify-content-lg-end">
                                <div class="mobile-logo d-lg-none">
                                    <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                                </div>
                                <div class="menu-area">
                                    <ul class="menu">
                                        <li><a href="{{ url("/") }}">Acceuil</a></li>
                                        <li><a href="{{ route('tombola.index') }}">Tombola</a></li>
                                        <li><a href="tournament.html">F.A.Q</a></li>
                                        <li><a href="tournament.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>

                                    <a href="{{ route("ticket.index",[App\Models\tombola::where('status','=',1)->orderby("date_tirage","ASC")->first()->id]) }}" class="signup"><i class="icofont-cart-alt"></i> <span>Ticket pour la prochain tirage</span></a>

                                    <!-- toggle icons -->
                                    <div class="header-bar d-lg-none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="ellepsis-bar d-lg-none">
                                        <i class="icofont-info-square"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- ==========Header Section Ends Here========== -->



        @yield('content')


        <!-- ================ footer Section start Here =============== -->
        <footer class="footer-section" style="background-image: url(assets/images/footer/bg.jpg);">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-3 justify-content-center g-lg-0">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="footer-top-item lab-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="assets/images/footer/icons/01.png" alt="Phone-icon">
                                    </div>
                                    <div class="lab-content">
                                        <span>Phone Number : +88012 345 678 912</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="footer-top-item lab-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="assets/images/footer/icons/02.png" alt="email-icon">
                                    </div>
                                    <div class="lab-content">
                                        <span>Email : youremail@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="footer-top-item lab-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="assets/images/footer/icons/03.png" alt="location-icon">
                                    </div>
                                    <div class="lab-content">
                                        <span>Address : 30 North West New York</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle padding-top padding-bottom">
                <div class="container">
                    <div class="row padding-lg-top">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="footer-middle-item-wrapper">
                                <div class="footer-middle-item mb-lg-0">
                                    <div class="fm-item-title mb-4">
                                        <img src="assets/images/logo/logo.png" alt="logo">
                                    </div>
                                    <div class="fm-item-content">
                                        <p class="mb-4">Upropriate brand economca sound technolog after covalent technology enable prospective wastng markets whereas propriate and brand economca sound technolog</p>
                                        <ul class="match-social-list d-flex flex-wrap align-items-center">
                                            <li><a href="#"><img src="assets/images/match/social-1.png" alt="vimeo"></a></li>
                                            <li><a href="#"><img src="assets/images/match/social-2.png" alt="youtube"></a></li>
                                            <li><a href="#"><img src="assets/images/match/social-3.png" alt="twitch"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="footer-middle-item-wrapper">
                                <div class="footer-middle-item mb-lg-0">
                                    <div class="fm-item-title">
                                        <h4>Top jackpot games</h4>
                                    </div>
                                    <div class="fm-item-content">
                                        <div class="fm-item-widget lab-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="#"> <img src="assets/images/footer/01.jpg" alt="footer-widget-img" class="rounded-3"></a>
                                                </div>
                                                <div class="lab-content">
                                                    <a href="blog-single.html"><h6>free Poker Game</h6></a>
                                                    <p>Poker: <b>$230</b></p>
                                                    <div class="rating">
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fm-item-widget lab-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="#"><img src="assets/images/footer/02.jpg" alt="footer-widget-img" class="rounded-3"></a>
                                                </div>
                                                <div class="lab-content">
                                                    <a href="blog-single.html"><h6>CLUB Poker Game</h6></a>
                                                    <p>Poker: <b>$290</b></p>
                                                    <div class="rating">
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fm-item-widget lab-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="#"><img src="assets/images/footer/03.jpg" alt="footer-widget-img" class="rounded-3"></a>
                                                </div>
                                                <div class="lab-content">
                                                    <a href="blog-single.html"><h6>ROYAL Poker Game</h6></a>
                                                    <p>Poker: <b>$330</b></p>
                                                    <div class="rating">
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="footer-middle-item-wrapper">
                                <div class="footer-middle-item-3 mb-lg-0">
                                    <div class="fm-item-title">
                                        <h4>Our Newsletter</h4>
                                    </div>
                                    <div class="fm-item-content">
                                        <p>Casina esports organization supported by community leaders</p>
                                        <form>
                                            <div class="form-group mb-4">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" class="form-control" placeholder="Your Email">
                                            </div>
                                            <button type="submit" class="default-button"><span>Send Massage <i class="icofont-circled-right"></i></span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom-content text-center">
                                <p>&copy;2022 <a href="index.html">Casina</a> - All Rights Reserved. Developed by <a href="https://themeforest.net/user/codexcoder">CodexCoder</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ================ footer Section end Here =============== -->





	<!-- All Needed JS -->

	<script src="{{ asset('assets/frontoffice/js/vendor/modernizr-3.11.2.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/circularProgressBar.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/swiper.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/lightcase.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/vendor/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/frontoffice/js/main.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('assets/css/bootstrap.custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('assets/css/home_1.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('assets/css/custom') }}.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>

    <div id="page">

        <header class="version_1">
            <div class="layer"></div>
            <!-- Mobile menu overlay mask -->
            <div class="main_header">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
                            <div id="logo">
                                <a href="index.html"><img src="img/logo.svg" alt="" width="100" height="35"></a>
                            </div>
                        </div>
                        <nav class="col-xl-6 col-lg-7">
                            <a class="open_close" href="javascript:void(0);">
                                <div class="hamburger hamburger--spin">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </a>
                            <!-- Mobile menu button -->
                            <div class="main-menu">
                                <div id="header_menu">
                                    <a href="index.html"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                                    <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                                </div>
                                <ul>
                                    <li>
                                        <a href="blog.html">Acceuil</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Condition général dutilisation</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-danger" href="">Acheter Un Ticket</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/main-menu -->
                        </nav>

                    </div>
                    <!-- /row -->
                </div>
            </div>
        </header>
        <!-- /header -->

        <main>
            @yield('content')
        </main>

        <footer class="revealed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_1">Quick Links</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_1">
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="help.html">Faq</a></li>
                                <li><a href="help.html">Help</a></li>
                                <li><a href="account.html">My account</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_2">Categories</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_2">
                            <ul>
                                <li><a href="listing-grid-1-full.html">Clothes</a></li>
                                <li><a href="listing-grid-2-full.html">Electronics</a></li>
                                <li><a href="listing-grid-1-full.html">Furniture</a></li>
                                <li><a href="listing-grid-3.html">Glasses</a></li>
                                <li><a href="listing-grid-1-full.html">Shoes</a></li>
                                <li><a href="listing-grid-1-full.html">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_3">Contacts</h3>
                        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                            <ul>
                                <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                                <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                                <li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_4">Keep in touch</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_4">
                            <div id="newsletter">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                                </div>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li>
                                        <a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                    <li>
                                        <a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                    <li>
                                        <a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                    <li>
                                        <a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <ul class="footer-selector clearfix">
                            <li>
                                <div class="styled-select lang-selector">
                                    <select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
                                </div>
                            </li>
                            <li>
                                <div class="styled-select currency-selector">
                                    <select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
                                </div>
                            </li>
                            <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/cards_all.svg" alt="" width="198" height="30" class="lazy"></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li><span>© 2020 Allaia</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="toTop"></div>
    <!-- Back to top button -->

    <script src="{{ asset('assets/js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/carousel-home.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>
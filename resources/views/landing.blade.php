<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Nex Sistem &mdash; Free One Page Bootstrap 4 Template by uicookies.com</title>
    <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
    <meta name="keywords"
        content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">

</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <section id="main-menu">
        <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-primary " id="pb-navbar">
            <div class="container">
                <img src="\assets\images\logonex.png" width=20%; alt="">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#section-home">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Store
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Browse All</a>
                                <hr>
                                <a class="dropdown-item" href="#">Register a New Domain</a>
                                <a class="dropdown-item" href="#">Transfer Domain to Us</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#section-announcements">Announcements</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#section-knowlegdebase">Knowlegdebase</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#section-network">Network Status</a></li>
                        <li class="nav-item"><a class="nav-link" href="#section-contact">Contact Us</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li menuitemname="Account" class="dropdown" id="secondnavbardrop">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                Account
                                &nbsp;<b class="caret"></b> </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/members/clientarea.php">Login</a>
                                <hr>
                                <a class="dropdown-item" href="/members/register.php">Register</a>
                                <a class="dropdown-item" href="/members/index.php?rp=/password/reset/begin">Forgot
                                    Password</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- END nav -->




    <section class="pb_cover_v3 overflow-hidden text-left pb_slant-light" id="section-home">
        <div class="container text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-sm-4">
                    <h3 class="heading mb-3">{{$title}}</h3>
                </div>
                <form class="col-md-6 col-sm-4">
                    <div class="form-row align-items-center">
                        <div class="col-md-6">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        </div>
                        <div class="input-group input-group-mb-3">
                            <input type="text" class="form-control" name="domain" placeholder="eg. example.com"
                                autocapitalize="none" data-toggle="tooltip" data-placement="left" data-trigger="manual"
                                title="" data-original-title="Required" aria-describedby="tooltip339593">
                            <div class="tooltip fade left in" role="tooltip" id="tooltip339593"
                                style="top: 11.5px; left: -75px; display: block;">
                                <div class="tooltip-arrow" style="top: 50%;"></div>
                                <div class="tooltip-inner">Required</div>
                            </div>
                            <span class="input-group-append">
                                <input type="submit" class="btn search" value="Search">
                            </span>
                        </div>
                    </div>
                </form>
                <div class="col-12 col-md-8 col-sm-4">
                    <p class="sub-heading mb-3">{{$desc}}</p>
                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- END section -->

    <section class="pb_section bg-white pb_slant-white " id="section-pricing">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
                        <strong>Pricing</strong></h5>
                    <h2>Choose Your Plans</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="pb_pricing_v1 p-5 border text-center bg-white">
                        <h3>Basic</h3>
                        <span class="price"><sup>$</sup>19<span>month</span></span>
                        <p class="pb_font-15">Far far away, behind the word mountains, far from the countries
                            Vokalia
                            and Consonantia, there live the blind texts</p>
                        <p class="mb-0"><a href="#" role="button" class="btn btn-secondary">Get started</a></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="pb_pricing_v1 p-5 border border-success text-center bg-white">
                        <h3>Business</h3>
                        <span class="price"><sup>$</sup>39<span>month</span></span>
                        <p class="pb_font-15">Far far away, behind the word mountains, far from the countries
                            Vokalia
                            and Consonantia, there live the blind texts</p>
                        <p class="mb-0"><a href="#" role="button" class="btn btn-success ">Get
                                started</a></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="pb_pricing_v1 p-5 border text-center bg-white">
                        <h3>Free</h3>
                        <span class="price"><sup>$</sup>99<span>month</span></span>
                        <p class="pb_font-15">Far far away, behind the word mountains, far from the countries
                            Vokalia
                            and Consonantia, there live the blind texts</p>
                        <p class="mb-0"><a href="#" role="button" class="btn btn-secondary">Get started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="pb_section bg-light pb_slant-white" id="section-features">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
                        <strong>OUR FEATURS MAKES US BEST</strong></h5>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut
                        labore et dolore magna aliqua.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="fa fa-cloud pb_icon-gradient fa-2x"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-4 heading">Multiple Cloud Infrastructure</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="fa fa-database pb_icon-gradient fa-2x"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-4 heading">Multiple Datacenters</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="fa fa-database pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-4 heading">Unlimited Database</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="fa fa-clock-o pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-4 heading">99.99% Uptime</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="fa fa-check-circle pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-4 heading">24/7 Support</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon"><i class="fa fa-shield pb_icon-gradient"></i></div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-4 heading">High Security</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ENDs ection -->

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="\assets\images\logonex.png" width="30%" alt="">
                    <p class="text-justify">Telp :
                        <a href="">08098899667</a><br>
                        WA : <a href="">08098899667</a>
                        <br>Jl.Jalak Bali 3 No 19 <br>
                    Bekasi, Jawa Barat 17165</p>
                </div>

                <div class="col-sm">
                    <h6>Hubungi Kami</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                        <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                        <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                        <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                        <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                        <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                    </ul>
                </div>

                <div class="col-sm">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="http://scanfcode.com/about/">About Us</a></li>
                        <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                        <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                        <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                        <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
                        <a href="#">Nex Sistem</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
































  

    <!-- Footer -->
    <!-- <footer class="pb_footer bg-green" role="contentinfo">
        <div class="container">
            <div class="row mb-5">
                <div class="footer_left col">
                    <img src="\assets\images\logonex.png" width=50% alt="">
                    <div class="spacing-25"></div>
                    <p class="text-sans-serif">Nex Sistem<br> Lorem ipsum dolor sit amet.
                        <br> Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="footer_right col">
                    <h4>Layanan Kami</h4>
                    <ul class="list-layanan">
                        <li><a href="">Shared Hosting</a></li>
                        <li><a href="">Enterprise Email Hosting</a></li>
                        <li><a href="">Virtual Private Server (VPS)</a></li>
                        <li><a href="">Pendaftaran Domain</a></li>
                        <li><a href="">Perlindungan SSL</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="pb_font-14">&copy; 2020. All Rights Reserved.</p>
            </div>
        </div>
        </div>
    </footer> -->

    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#1d82ff" /></svg></div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>

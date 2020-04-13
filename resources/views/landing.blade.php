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
        <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">Nex Sistem</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
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
        <!-- END nav -->




        <section
            class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light"
            id="section-home">
            <div class="container text-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <h3 class="heading mb-3">{{$title}}</h3>
                    </div>
                    <form class="col-md-6">
                        <div class="form-row align-items-center">
                            <div class="col-md-6">
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            </div>
                            <div class="input-group input-group-mb-3">
                                <input type="text" class="form-control" name="domain" placeholder="eg. example.com"
                                    autocapitalize="none" data-toggle="tooltip" data-placement="left"
                                    data-trigger="manual" title="" data-original-title="Required"
                                    aria-describedby="tooltip339593">
                                <div class="tooltip fade left in" role="tooltip" id="tooltip339593"
                                    style="top: 11.5px; left: -75px; display: block;">
                                    <div class="tooltip-arrow" style="top: 50%;"></div>
                                    <div class="tooltip-inner">Required</div>
                                </div>
                                <span class="input-group-append">
                                    <input type="submit" class="btn search" value="Search">
                                    <input type="submit" id="btnTransfer" class="btn transfer" value="Transfer">
                                </span>
                            </div>
                        </div>
                    </form>
                    <div class="row align-items-center justify-content-center">
                        <div class="sub-heading">
                            <p class="mb-3">{{$desc}}</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- END section -->

        <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
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
                                <h5 class="mt-0 mb-3 heading">Multiple Cloud Infrastructure</h5>
                                <p class="text-sans-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                    ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md- col-sm-6">
                        <div class="media d-block pb_feature-v1 text-left">
                            <div class="pb_icon"><i class="fa fa-database pb_icon-gradient fa-2x"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-3 heading">Multiple Datacenters</h5>
                                <p class="text-sans-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                    ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md- col-sm-6">
                        <div class="media d-block pb_feature-v1 text-left">
                            <div class="pb_icon"><i class="fa fa-database pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-3 heading">Unlimited Database</h5>
                                <p class="text-sans-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                    ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md- col-sm-6">
                        <div class="media d-block pb_feature-v1 text-left">
                            <div class="pb_icon"><i class="fa fa-clock-o pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-3 heading">99.99% Uptime</h5>
                                <p class="text-sans-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                    ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md- col-sm-6">
                        <div class="media d-block pb_feature-v1 text-left">
                            <div class="pb_icon"><i class="fa fa-check-circle pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-3 heading">24/7 Support</h5>
                                <p class="text-sans-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                    ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md- col-sm-6">
                        <div class="media d-block pb_feature-v1 text-left">
                            <div class="pb_icon"><i class="fa fa-shield pb_icon-gradient"></i></div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-3 heading">High Security</h5>
                                <p class="text-sans-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem
                                    ipsum dolor sit consectetur sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->


        <section class="pb_section pb_slant-light pb_pb-220" id="section-reviews">
            <div class="container">
                <div class="row justify-content-center mb-1">
                    <div class="col-md-6 text-center mb-5">
                        <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
                            <strong>Reviews</strong></h5>
                        <h2>Good Review From Good People</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="pb_slide_testimonial_sync_v1">
                            <div class="pb_slider_content js-pb_slider_content2">
                                <div>
                                    <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                        <div class="media-body">
                                            <div class="quote">&ldquo;</div>
                                            <blockquote class="mb-5">Far far away, behind the word mountains, far from
                                                the
                                                countries Vokalia and Consonantia, there live the blind texts. Separated
                                                they live in Bookmarksgrove right at the coast of the Semantics, a large
                                                language ocean.</blockquote>
                                            <p>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star-half text-warning"></i>
                                                <i class="ion-ios-star-outline text-warning"></i>
                                            </p>
                                            <h3 class="heading">Garry Alexander</h3>
                                            <span class="subheading">@garry</span>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                        <div class="media-body">
                                            <div class="quote">&ldquo;</div>
                                            <blockquote class="mb-5">A small river named Duden flows by their place and
                                                supplies it with the necessary regelialia. It is a paradisematic
                                                country, in
                                                which roasted parts of sentences fly into your mouth.</blockquote>
                                            <p>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star-half text-warning"></i>
                                                <i class="ion-ios-star-outline text-warning"></i>
                                            </p>
                                            <h3 class="heading">Deborah Smith</h3>
                                            <span class="subheading">@deborah</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                        <div class="media-body">
                                            <div class="quote">&ldquo;</div>
                                            <blockquote class="mb-5">Even the all-powerful Pointing has no control about
                                                the
                                                blind texts it is an almost unorthographic life One day however a small
                                                line
                                                of blind text by the name of Lorem Ipsum decided to leave for the far
                                                World
                                                of Grammar.</blockquote>
                                            <p>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star-half text-warning"></i>
                                                <i class="ion-ios-star-outline text-warning"></i>
                                            </p>
                                            <h3 class="heading">James Robertson</h3>
                                            <span class="subheading">@james</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                                        <div class="media-body">
                                            <div class="quote">&ldquo;</div>
                                            <blockquote class="mb-5">The Big Oxmox advised her not to do so, because
                                                there
                                                were thousands of bad Commas, wild Question Marks and devious Semikoli,
                                                but
                                                the Little Blind Text didn’t listen. She packed her seven versalia, put
                                                her
                                                initial into the belt and made herself on the way.</blockquote>
                                            <p>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star text-warning"></i>
                                                <i class="ion-ios-star-half text-warning"></i>
                                                <i class="ion-ios-star-outline text-warning"></i>
                                            </p>
                                            <h3 class="heading">Marie Gibson</h3>
                                            <span class="subheading">@marie</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="pb_slider_nav js-pb_slider_nav2">
                                        <div class="author">
                                            <img class="img-fluid rounded-circle" src="assets/images/person_1.jpg"
                                                alt="Generic placeholder image">
                                        </div>
                                        <div class="author">
                                            <img class="img-fluid rounded-circle" src="assets/images/person_5.jpg"
                                                alt="Generic placeholder image">
                                        </div>
                                        <div class="author">
                                            <img class="img-fluid rounded-circle" src="assets/images/person_2.jpg"
                                                alt="Generic placeholder image">
                                        </div>
                                        <div class="author">
                                            <img class="img-fluid rounded-circle" src="assets/images/person_6.jpg"
                                                alt="Generic placeholder image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END sync_v1 -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->

        <section class="pb_section bg-light pb_slant-white" id="section-pricing">
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
                        <div class="pb_pricing_v1 p-5 border border-primary text-center bg-white">
                            <h3>Business</h3>
                            <span class="price"><sup>$</sup>39<span>month</span></span>
                            <p class="pb_font-15">Far far away, behind the word mountains, far from the countries
                                Vokalia
                                and Consonantia, there live the blind texts</p>
                            <p class="mb-0"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Get
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
        <!-- ENDs ection -->


        <footer class="pb_footer bg-light" role="contentinfo">
            <div class="container">
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
                        <p class="pb_font-14">&copy; 2020. All Rights Reserved. <br> <a
                                href="https://uicookies.com/bootstrap-html-templates/">Bootstrap Templates</a> by
                            uiCookies
                        </p>
                        <p class="pb_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank"
                                rel="nofollow">Unsplash</a></p>
                    </div>
                </div>
            </div>
        </footer>

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

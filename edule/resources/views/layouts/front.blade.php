<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'edule')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('edule/assets/css/plugins/jqvmap.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('edule/assets/css/style.css') }}">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section">

            <!-- Header Top Start -->
            <div class="header-top d-none d-lg-block">
                <div class="container">

                    <!-- Header Top Wrapper Start -->
                    <div class="header-top-wrapper">

                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <p>All course 28% off for <a href="#">Liberian people’s.</a></p>
                        </div>
                        <!-- Header Top Left End -->

                        <!-- Header Top Medal Start -->
                        <div class="header-top-medal">
                            <div class="top-info">
                                <p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>
                                <p><i class="flaticon-email"></i> <a
                                        href="mailto:address@gmail.com">address@gmail.com</a></p>
                            </div>
                        </div>
                        <!-- Header Top Medal End -->

                        <!-- Header Top Right Start -->
                        <div class="header-top-right">
                            <ul class="social">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Header Top Right End -->

                    </div>
                    <!-- Header Top Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">

                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('edule/assets/images/logo.png') }}"
                                    alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('course') }}">courses</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sing In & Up Start -->
                        @if (Route::has('login'))
                            <div class="header-sign-in-up d-none d-lg-block">
                                <ul>
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}" class="sign-in">Dashboard</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="sign-in">Log in</a></li>

                                        @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="sign-up">Register</a></li>
                                        @endif
                                    @endauth
                                </ul>
                            </div>
                        @endif



                        <!-- Header Sing In & Up End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Main End -->

                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu">

            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Top Medal Start -->
            <div class="mobile-top">
                <p><i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970) 262-1413</a></p>
                <p><i class="flaticon-email"></i> <a href="mailto:address@gmail.com">address@gmail.com</a></p>
            </div>
            <!-- Mobile Top Medal End -->

            <!-- Mobile Sing In & Up Start -->
            <div class="mobile-sign-in-up">
                <ul>
                    <li><a class="sign-in" href="login.html">Sign In</a></li>
                    <li><a class="sign-up" href="register.html">Sign Up</a></li>
                </ul>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">All Course</a>
                        <ul class="sub-menu">
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="courses-details.html">Courses Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages </a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404-error.html">404 Error</a></li>
                            <li><a href="after-enroll.html">After Enroll</a></li>
                            <li><a href="courses-admin.html">Instructor Dashboard (Course List)</a></li>
                            <li><a href="overview.html">Instructor Dashboard (Performance)</a></li>
                            <li><a href="students.html">Students</a></li>
                            <li><a href="reviews.html">Reviews</a></li>
                            <li><a href="engagement.html">Course engagement</a></li>
                            <li><a href="traffic-conversion.html">Traffic & conversion</a></li>
                            <li><a href="messages.html">Messages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Details</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </div>
            <!-- Mobile Menu End -->

            <!-- Mobile Menu End -->
            <div class="mobile-social">
                <ul class="social">
                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Slider Start -->
        <div class="section slider-section">

            <!-- Slider Shape Start -->
            <div class="slider-shape">
                <img class="shape-1 animation-round" src="{{ asset('edule/assets/images/shape/shape-8.png') }}"
                    alt="Shape">
            </div>
            <!-- Slider Shape End -->

            <div class="container">

                <!-- Slider Content Start -->
                <div class="slider-content">
                    <h4 class="sub-title">Start your favourite course</h4>
                    <h2 class="main-title">Now learning from anywhere, and build your <span>bright career.</span></h2>
                    <p>It has survived not only five centuries but also the leap into electronic typesetting.</p>
                    <a class="btn btn-primary btn-hover-dark" href="#">Start A Course</a>
                </div>
                <!-- Slider Content End -->

            </div>

            <!-- Slider Courses Box Start -->
            <div class="slider-courses-box">

                <img class="shape-1 animation-left" src="{{ asset('edule/assets/images/shape/shape-5.png') }}"
                    alt="Shape">

                <div class="box-content">
                    <div class="box-wrapper">
                        <i class="flaticon-open-book"></i>
                        <span class="count">1,235</span>
                        <p>courses</p>
                    </div>
                </div>

                <img class="shape-2" src="{{ asset('edule/assets/images/shape/shape-6.png') }}" alt="Shape">

            </div>
            <!-- Slider Courses Box End -->

            <!-- Slider Rating Box Start -->
            <div class="slider-rating-box">

                <div class="box-rating">
                    <div class="box-wrapper">
                        <span class="count">4.8 <i class="flaticon-star"></i></span>
                        <p>Rating (86K)</p>
                    </div>
                </div>

                <img class="shape animation-up" src="{{ asset('edule/assets/images/shape/shape-7.png') }}"
                    alt="Shape">

            </div>
            <!-- Slider Rating Box End -->

            <!-- Slider Images Start -->
            <div class="slider-images">
                <div class="images">
                    <img src="{{ asset('edule/assets/images/slider/slider-1.png') }}" alt="Slider">
                </div>
            </div>
            <!-- Slider Images End -->

            <!-- Slider Video Start -->
            <div class="slider-video">
                <img class="shape-1" src="{{ asset('edule/assets/images/shape/shape-9.png') }}" alt="Shape">

                <div class="video-play">
                    <img src="{{ asset('edule/assets/images/shape/shape-10.png') }}" alt="Shape">
                    <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i
                            class="flaticon-play"></i></a>
                </div>
            </div>
            <!-- Slider Video End -->

        </div>
        <!-- Slider End -->

        @yield('content')

        <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">

                <img class="shape-1 animation-down" src="{{ asset('edule/assets/images/shape/shape-21.png') }}"
                    alt="Shape">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"><img src="{{ asset('edule/assets/images/logo.png') }}"
                                            alt="Logo"></a>
                                </div>

                                <div class="widget-address">
                                    <h4 class="footer-widget-title">Caribbean Ct</h4>
                                    <p>Haymarket, Virginia (VA).</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a
                                                href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                    </li>
                                    <li>
                                        <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970)
                                                262-1413</a> </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <div class="col-lg-6 order-md-3 order-lg-2">

                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Category</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Creative Writing</a></li>
                                        <li><a href="#">Film & Video</a></li>
                                        <li><a href="#">Graphic Design</a></li>
                                        <li><a href="#">UI/UX Design</a></li>
                                        <li><a href="#">Business Analytics</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Quick Links</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Discussion</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">Course FAQ’s</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <!-- Footer Widget Link End -->

                        </div>
                        <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Subscribe</h4>

                                <div class="widget-subscribe">
                                    <p>Lorem Ipsum has been them an industry printer took a galley make book.</p>

                                    <div class="widget-form">
                                        <form action="#">
                                            <input type="text" placeholder="Email here">
                                            <button class="btn btn-primary btn-hover-dark">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                    </div>
                </div>

                <img class="shape-2 animation-left" src="{{ asset('edule/assets/images/shape/shape-22.png') }}"
                    alt="Shape">

            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Sitemap</a>
                            <a href="#">Security</a>
                        </div>
                        <div class="copyright-text">
                            <p>&copy; 2021 <span> Edule </span> Made with <i class="icofont-heart-alt"></i> by <a
                                    href="#">Codecarnival</a></p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>






    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('edule/assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('edule/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('edule/assets/js/plugins/popper.min.js') }}"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('edule/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('edule/assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('edule/assets/js/plugins/video-playlist.js') }}"></script>
    <script src="{{ asset('edule/assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('edule/assets/js/plugins/ajax-contact.js') }}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="{{ asset('edule/assets/js/main.js') }}"></script>




</body>

</html>

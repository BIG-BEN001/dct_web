<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Directcore Technology IT Solutions </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/fav.png">

    <!-- CSS ============================================ -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/home.mini.css">
    <link rel="stylesheet" href="assets/css/sms.mini.css">

</head>

<body>

<!--====================  header area ====================-->
<div class="header-area header-area--absolute">
    {{--<div class="header-top-bar-info border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-wrap">
                        <div class="top-bar-left">
                            <div class="top-bar-text text-black"><a href="#" class="font-medium display-inline">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</div>
                        </div>
                        <div class="top-bar-right">
                            <ul class="top-bar-info">
                                <li class="info-item">
                                    <a href="tel:+254735070299" class="info-link text-black">
                                        <i class="info-icon fa fa-phone"></i>
                                        <span class="info-text"><strong>+254735070299</strong></span>
                                    </a>
                                </li>
                                <li class="info-item text-black">
                                    <i class="info-icon fa fa-map-marker-alt"></i>
                                    <span class="info-text">No. 3, Sri-Aurobindo, Mzima Springs, Lavington, Nairobi</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="header-bottom-wrap bg-white header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="/">
                                <img src="assets/images/logo/dct-logo.png" class="img-fluid light-logo" alt="">
                                <!-- <img src="assets/images/logo/dct-logo.png" class="img-fluid dark-logo" alt=""> -->
                            </a>
                        </div>

                        <div class="header-right ">
                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-three d-none d-xl-block">
                                <nav class="navigation-menu">
                                    <ul>
                                    @foreach($posts as $post)

                                        @if($post['id']==1)
                                        <li >
                                            <a href="/">{!!$post['title']!!}</a>
                                        </li>
                                        @endif
                                        @endforeach

                                        @foreach($posts as $post)

                                        @if($post['id']==2)
                                        <li class="has-children">
                                            <a href="#">{!!$post['title']!!}</a>
                                            @endif
                                        @endforeach
                                            <!-- mega menu -->
                                            <ul class="megamenu megamenu--mega">
                                                <li>
                                                    <h2 class="page-list-title">Products</h2>
                                                    <ul>
                                                        <li><a href="https://www.pesatel.com/"><span><img class="embed-responsive" src="https://www.pesatel.com/assets/img/logo.png" ></span></a></li>
                                                        <li><a href="https://nexcom.ke/"><span><img class="embed-responsive" src="https://nexcom.ke/images/logo/nexcom-logo.png" ></span></a></li>
                                                        <li><a href="https://alanacloud.com/"><span><img class="embed-responsive" src="https://alanacloud.com/images/logo.png" ></span></a></li>
                                                    </ul>
                                                </li>
                                                <li>

                                        @foreach($posts as $post)

                                        @if($post['id']==2)
                                        {!!$post['description']!!}
                                        @endif
                                        @endforeach
                                                </li>
                                                <li>
                                                @foreach($posts as $post)

                                                    @if($post['id']==2)
                                                    {!!$post['description2']!!}
                                                    @endif
                                                    @endforeach
                                                </li>

                                            </ul>
                                        </li>

                                        @foreach($posts as $post)
                                        @if($post['id']==3)
                                        <li>
                                            <a href="{{url ('about-us')}}">{!!$post['title']!!}</a>
                                            @endif
                                        @endforeach
                                        </li>

                                        @foreach($posts as $post)
                                        @if($post['id']==4)
                                        <li >
                                            <a href="{{url('contact-us')}}">{!!$post['title']!!}</a>
                                            @endif
                                        @endforeach
                                        </li>
                                    </ul>
                                </nav>
                            </div>



                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon white-md-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--====================  End of header area  ====================-->

<div id="app">
    @yield('content')
</div>

<!--====================  footer area ====================-->
<div class="footer-area-wrapper reveal-footer bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-6 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="assets/images/logo//dct-logo.png" class="img-fluid" alt="">
                    </div>

                </div>


                <!-- <div class="col-lg-6 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Support</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                        <li><a href="#" class="hover-style-link">Contact Us</a></li>
                    </ul>
                </div> -->
                <div class="col-lg-6 col-md-6 col-sm-6 footer-widget">

                    <ul class="footer-widget__list" style="float: right;">
                        <li><h6 >Find Us</h6></li>
                        <li>No. 3, Sri-Aurobindo, Mzima Springs
                            Lavington, Nairobi
                        </li>
                        <li><a href="mailto:info@directcore.com" class="hover-style-link">Email: info@directcore.com</a></li>
                        <li><a href="tel:+254-202325599" class="hover-style-link text-black font-weight--bold">Phone: +254-202325599</a></li>
                        <li><a href="https://directcore.com/" class="hover-style-link text-color-primary">Directcore Technology</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left">
                    <span class="copyright-text">&copy; 2020 Directcore Technology. <a href="https://hasthemes.com/">All Rights Reserved.</a></span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <ul class="list ht-social-networks solid-rounded-icon">

                        <li class="item">
                            <a href="https://twitter.com/" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-twitter link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://facebook.com/" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-facebook-f link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://instagram.com/" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-instagram link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://linkedin.com/" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-linkedin link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->


<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->


<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="/">
                                <img src="assets/images/logo/dct-logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li >
                        <a href="/"><span>Home</span></a>
                    </li>
                    <li class="has-children">
                        <a href="#"><span>What We Do</span></a>
                        <!-- mega menu -->
                        <ul class="megamenu megamenu--mega">
                            <li>
                                <h2 class="page-list-title">Products</h2>
                                <ul>
                                    <li><a href="#"><span>Coming Soon</span></a></li>

                                </ul>
                            </li>
                            <li>
                                <h2 class="page-list-title">Solutions</h2>
                                <ul>
                                    <li><a href="#"><span>Coming soon</span></a></li>

                                </ul>
                            </li>
                            <li>
                                <h2 class="page-list-title">Serices</h2>
                                <ul>
                                    <li><a href=""><span>Coming Soon</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{url ('about-us')}}"><span>Who we Are</span></a>

                    </li>
                    <li >
                        <a href="#"><span>Contact Us</span></a>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->



<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

<script src="assets/js/owlcarousel/owl.carousel.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- Swiper Slider JS -->
<script src="assets/js/plugins/swiper.min.js"></script>

<!-- Light gallery JS -->
<script src="assets/js/plugins/lightgallery.min.js"></script>

<!-- Waypoints JS -->
<script src="assets/js/plugins/waypoints.min.js"></script>

<!-- Counter down JS -->
<script src="assets/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
<script src="assets/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="assets/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="assets/js/plugins/images-loaded.min.js"></script>

<!-- Wavify JS -->
<script src="assets/js/plugins/wavify.js"></script>

<!-- jQuery Wavify JS -->
<script src="assets/js/plugins/jquery.wavify.js"></script>

<!-- circle progress JS -->
<script src="assets/js/plugins/circle-progress.min.js"></script>

<!-- counterup JS -->
<script src="assets/js/plugins/counterup.min.js"></script>

<!-- wow JS -->
<script src="assets/js/plugins/wow.min.js"></script>

<!-- animation text JS -->
<script src="assets/js/plugins/animation-text.min.js"></script>

<!-- Vivus JS -->
<script src="assets/js/plugins/vivus.min.js"></script>

<!-- Some plugins JS -->
<script src="assets/js/plugins/some-plugins.js"></script>


<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->


<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>


<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script src="assets/js/custom.js"></script>

<script>



</script>


</body>


<!-- Mirrored from demo.hasthemes.com/Directcore-preview/index-resolutions.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 May 2020 12:25:49 GMT -->
</html>

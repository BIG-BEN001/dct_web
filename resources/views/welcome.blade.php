@extends('layout.app')
@section('content')
    <div class="site-wrapper-reveal">


        <div class="owl-carousel owl-theme">
            <div class="owl-slide d-flex align-items-center cover"
                 style="background-image: url(https://online.husson.edu/wp-content/uploads/2018/02/1200x627-CoolInnovations-Header-HUSS-1.jpg);">
                <div class="container">

                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-10 col-md-6 static">
                            <div class="owl-slide-text">
                            @foreach($posts as $post)

                                @if($post['id']==5)

                                {!!$post['title']!!}
                                                @endif
                                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/owl-slide-->

            <div class="owl-slide d-flex align-items-center cover"
                 style="background-image: url(https://www.litmos.com/wp-content/uploads/2016/06/blog-eLearning-templates.png);">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-10 col-md-6 static">
                            <div class="owl-slide-text">
                            @foreach($posts as $post)

                            @if($post['id']==6)

                            {!!$post['title']!!}
                                                @endif
                                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/owl-slide-->

            <div class="owl-slide d-flex align-items-center cover"
                 style="background-image: url(https://investucatett.com/wp-content/uploads/2019/09/Fintech-Pledge-IE-Website.png);">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-10 col-md-6 static">
                            <div class="owl-slide-text">
                            @foreach($posts as $post)

                            @if($post['id']==7)

                            {!!$post['title']!!}
                                                @endif
                                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/owl-slide-->
        </div>


        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_60 border-bottom">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                        @foreach($posts as $post)

                        @if($post['id']==8)
                        {!!$post['title']!!}
                                                @endif
                                                @endforeach
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->

        <!--=========== fun fact Wrapper Start ==========-->
        <div class="fun-fact-wrapper bg-gray section-space--ptb_70">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 offset-lg-1">
                        <div class="modern-number-01 mr-5">
                            @foreach($posts as $post)

                        @if($post['id']==9)
                        {!!$post['title']!!}
                        @endif
                        @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 mt-10">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 wow move-up">
                            @foreach($posts as $post)

                                @if($post['id']==9)
                                {!!$post['description']!!}
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-4 col-sm-4 wow move-up">
                            @foreach($posts as $post)

                                @if($post['id']==9)
                                {!!$post['description2']!!}
                                @endif
                                @endforeach
                            </div>
                            <div class="col-md-4 col-sm-4 wow move-up">
                            @foreach($posts as $post)

                                @if($post['id']==9)
                                {!!$post['description3']!!}
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 wow move-up text-center">
                                <div class="fun-fact--three text-center">
                                    <div class="fun-fact__count ">100k</div>
                                    <h6 class="fun-fact__text">people's lives impacted</h6>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!--=========== fun fact Wrapper End ==========-->

        <!--===========  Our Company History Start =============-->

        <div class="our-company-history section-space--ptb_0 ">
            <div class="container-fluid">
                <div class="row align-items-center " style="margin-top: -100px">
                    <div class="col-lg-6">
                        <div class="faq-custom-col">
                            <div class="section-title-wrap">
                                <div class="item" data-aos="fade-right">
                                @foreach($posts as $post)

                                    @if($post['id']==11)
                                    {!!$post['title']!!}
                                @endif
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rv-video-section">

                            <div class="item" data-aos="fade-down">

                                <div class="main-video-box video-popup">
                                    <a href="" class="video-link  mt-30">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX18731899.jpg" alt="">

                                        </div>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===========  Our Company History Start  End =============-->

        <!--===========  Our Company History Start =============-->

        <div class="our-company-history section-space--ptb_0 ">
            <div class="container-fluid">
                <div class="row align-items-center" style="margin-top: -130px">
                    <div class="col-lg-6">
                        <div class="rv-video-section">

                            <div class="item" data-aos="fade-left">

                                <div class="main-video-box video-popup">
                                    <a href="" class="video-link  mt-30">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="https://weetracker.com/wp-content/uploads/2020/01/102301242-465629331.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-custom-col">
                            <div class="section-title-wrap">
                                <div class="item" data-aos="fade-right">

                                @foreach($posts as $post)

                                @if($post['id']==11)
                                {!!$post['description']!!}
                                @endif
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--===========  Our Company History Start  End =============-->

        <!--===========  Our Company History Start =============-->

        <div class="our-company-history section-space--ptb_0">
            <div class="container-fluid">
                <div class="row align-items-center" style="margin-top: -120px">
                    <div class="col-lg-6">
                        <div class="faq-custom-col">
                            <div class="section-title-wrap">
                                <div class="item" data-aos="fade-right">
                                @foreach($posts as $post)

                                    @if($post['id']==11)
                                    {!!$post['description2']!!}
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rv-video-section">

                            <div class="item" data-aos="fade-down">

                                <div class="main-video-box video-popup">
                                    <a href="" class="video-link  mt-20">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="https://tr4.cbsistatic.com/hub/i/r/2016/06/07/d22c04ec-84a5-4141-8662-a4e51465fe1f/thumbnail/770x578/f659e39ba7b557898cb5822d0aa0bda2/datacenterhero.jpg" alt="">

                                        </div>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===========  Our Company History Start  End =============-->

        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper section-space--ptb_0 border-bottom">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                        @foreach($posts as $post)

                            @if($post['id']==12)
                            {!!$post['title']!!}
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__one">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-icon style-01 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-icon-1"
                                                     data-svg-icon="assets/images/svg/linea-basic-heart.svg"></div>
                                            </div>
                                            <div class="content">
                                            @foreach($posts as $post)

                                            @if($post['id']==13)
                                            {!!$post['title']!!}
                                            @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="col-lg-3 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-icon style-01 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-icon-2"
                                                     data-svg-icon="assets/images/svg/linea-basic-case.svg"></div>
                                            </div>
                                            <div class="content">
                                            @foreach($posts as $post)

                                                @if($post['id']==13)
                                                {!!$post['description']!!}
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="col-lg-3 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-icon style-01 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-icon-3"
                                                     data-svg-icon="assets/images/svg/linea-basic-alarm.svg"></div>
                                            </div>
                                            <div class="content">
                                            @foreach($posts as $post)

                                                @if($post['id']==13)
                                                {!!$post['description2']!!}
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="col-lg-3 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-icon style-01 single-svg-icon-box">
                                        <div class="icon-box-wrap">
                                            <div class="icon">
                                                <div class="svg-icon" id="svg-icon-4"
                                                     data-svg-icon="assets/images/svg/linea-basic-geolocalize-05.svg"></div>
                                            </div>
                                            <div class="content">
                                            @foreach($posts as $post)

                                                @if($post['id']==13)
                                                {!!$post['description3']!!}
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->

        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer processing-contact-us-bg section-space--ptb_60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one">
                        @foreach($posts as $post)

                            @if($post['id']==14)
                            {!!$post['title']!!}
                            @endif
                            @endforeach

                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-info-two text-center">
                            <div class="icon">
                                <span class="fal fa-phone"></span>
                            </div>
                            @foreach($posts as $post)

                            @if($post['id']==14)
                            {!!$post['description']!!}
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->

        <!--====================  brand logo slider area ====================-->
        <div class="brand-logo-slider-area section-space--ptb_60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- brand logo slider -->
                        <div class="brand-logo-slider__container-area">
                            <div class="swiper-container brand-logo-slider__container">
                                <div class="swiper-wrapper brand-logo-slider__one">
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/cisco.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/cisco.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/emc.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/emc.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/juniper.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/juniper.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/kaspersky.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/kaspersky.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/Mikro.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/Mikro.jpg"
                                                     class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of brand logo slider area  ====================-->


        <!--=========== fun fact Wrapper Start ==========-->
        {{--<div class="about-banner-wrap banner-space bg-img" data-bg="assets/images/bg/managed-it-services-hero-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="about-banner-content text-center">
                            <h1 class="mb-15 text-white">Tailored IT Services</h1>
                            <h5 class="font-weight--normal text-white">Reach out to the world’s most reliable IT services.</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <!--====== Carousel Sliders Wrapper End ======-->

        <!--===========  feature-icon-wrapper  Start =============-->
        {{--<div class="feature-icon-wrapper section-space--ptb_80 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__three">
                            <div class="row">
                                <div class="col-lg-6 wow move-up">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-life-ring"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Networking
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Our Networking solutions include:
                                                        Data centre transformations; Network transformations,
                                                        optimization and management; Telecommunications installation & management;
                                                        Network security; Emmerging technologies.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow move-up">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-lock-alt"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                       Internet
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">We keep your business connected with a resilient high speed internet
                                                        and data connectivity services that provide a critical avenue for accessing real time applications,
                                                        connecting with customers and partners.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow move-up">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-globe"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Smart API Intergration
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Develop and propose product improvements through periodical and accurate testing, repairing & refining every version.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow move-up">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-medal"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Value Add Distribution
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">We supply Software, Networking, Computing & Telecom Equipment, Accessories
                                                        and Tools to Businesses and Resellers Our dedicated pre-sales team will help you make right
                                                        decisions for your IT Assets
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
        <!--=========== feature-icon-wrapper End =============-->

        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                        @foreach($posts as $post)

                                @if($post['id']==15)

                                {!!$post['title']!!}
                                @endif
                                @endforeach
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                    @foreach($posts as $post)

                        @if($post['id']==15)

                        {!!$post['description']!!}
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->



    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            ('.owl-carousel').owlCarousel();
        });
    </script>

@endsection

@extends('layout.app')
@section('content')
    <div class="site-wrapper-reveal">
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_box text-center">
                        @foreach($posts as $post)
                                @if($post['id']==26)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_0">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                        @foreach($posts as $post)
                                @if($post['id']==27)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="cybersecurity-about-box section-space--pb_0">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                        @foreach($posts as $post)
                                @if($post['id']==27)
                                {!!$post['description']!!}
                                @endif
                                                @endforeach
                        </div>

                        <div class="col-lg-5 offset-lg-1">
                            <div class="cybersecurity-about-text">
                            @foreach($posts as $post)
                                @if($post['id']==27)
                                {!!$post['description2']!!}
                                @endif
                                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider-wrapper section-space--ptb_0">
                    <div class="container-fluid">


                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="rv-video-section">

                                    <div class="item" data-aos="fade-left">

                                        <div class="main-video-box video-popup">
                                            <a href="" class="video-link  mt-30">
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid border-radus-5" src="https://images.idgesg.net/images/article/2017/08/robot_gear_automation_thinkstock_606703118_3x2-100732427-large.jpg" alt="">

                                                </div>
                                            </a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-custom-col">
                                    <div class="section-title-wrap">
                                        <div class="cybersecurity-about-text" data-aos="fade-right">

                                            @foreach($posts as $post)
                                            @if($post['id']==27)
                                            {!!$post['description3']!!}
                                            @endif
                                                @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->






        <!--========= About Delivering Wrapper Start ===========-->
        <div class="about-delivering-wrapper section-space--ptb_0">
            <div >
                <section class="use_cases">
                    <span class="use_cases_background"></span>
                    <article class="text">
                                         @foreach($posts as $post)
                                            @if($post['id']==28)
                                            {!!$post['title']!!}
                                            @endif
                                                @endforeach

                    </article>
                    <article class="use_cases_videos">
			        <span class="video_wrapper">
                        <img class="img-fluid border-radus-5" src="https://images.adsttc.com/media/images/5478/7c74/e58e/ce98/5800/00fc/large_jpg/ESC_12_Masai1.jpg?1417182318" alt="">

                    </span>
                    </article>
                </section>
            </div>
        </div>

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


    </div>
    @endsection

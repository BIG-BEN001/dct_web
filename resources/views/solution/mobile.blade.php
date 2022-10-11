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
                            @if($post['id']==38)
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
                            @if($post['id']==39)
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
                            @if($post['id']==39)
                            {!!$post['description']!!}
                            @endif
                                @endforeach
                        </div>

                        <div class="col-lg-5 offset-lg-1">
                            <div class="cybersecurity-about-text">
                            @foreach($posts as $post)
                            @if($post['id']==39)
                            {!!$post['description2']!!}
                            @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->



        <!--======== Tabs Wrapper Start ======== -->
        <div class="tabs-wrapper bg-gray section-space--ptb_0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        @foreach($posts as $post)
                            @if($post['id']==40)
                            {!!$post['title']!!}
                            @endif
                                @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 ht-tab-wrap">
                        <div class="text-center  ">
                            <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                                <li class="tab__item nav-item active">
                                @foreach($posts as $post)
                            @if($post['id']==41)
                                    <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">{!!$post['title']!!}</a>
                                    @endif
                                @endforeach
                                </li>
                                <li class="tab__item nav-item">
                                @foreach($posts as $post)
                            @if($post['id']==42)
                                    <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false">{!!$post['title']!!}</a>
                                    @endif
                                @endforeach
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content ht-tab__content">

                            <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_20">
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-1 ">
                                            <div class="tab-content-inner  mt-30">
                                            @foreach($posts as $post)
                                            @if($post['id']==41)
                                            {!!$post['description']!!}
                                            @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="tab-history-image video-popup mt-30">
                                                    <div class="single-popup-wrap">
                                                        <img class="img-fluid" src="https://endeavor.co.za/wp-content/uploads/2019/10/Mobile-banking.jpg" alt="">

                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                                <div class="tab-history-wrap section-space--mt_60">
                                    <div class="row">
                                        <div class="col-lg-6 ">
                                            <div class="tab-history-image video-popup mt-30">
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="https://endeavor.co.za/wp-content/uploads/2019/10/Mobile-banking.jpg" alt="">

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-5 offset-lg-1 ">
                                            <div class="tab-content-inner  mt-30">
                                            @foreach($posts as $post)
                                            @if($post['id']==42)
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
                </div>
            </div>
        </div>
        <!--======== Tabs Wrapper End ======== -->




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


        <!--========= About Delivering Wrapper Start ===========-->
        <div class="about-delivering-wrapper section-space--ptb_0">
            <div >
                <section class="use_cases">
                    <span class="use_cases_background_2"></span>
                    <article class="text">
                    @foreach($posts as $post)
                    @if($post['id']==43)
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



    </div>

@endsection

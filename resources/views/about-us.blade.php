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

                        @if($post['id']==16)

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

                        @if($post['id']==17)

                        {!!$post['title']!!}
                        @endif
                        @endforeach
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="cybersecurity-about-box section-space--pb_0">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="modern-number-01">
                            @foreach($posts as $post)

                            @if($post['id']==17)

                            {!!$post['description']!!}
                            @endif
                            @endforeach
                            </div>
                        </div>

                        <div class="col-lg-5 offset-lg-1">
                            <div class="cybersecurity-about-text">

                                   @foreach($posts as $post)

                            @if($post['id']==17)

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
                                                    <img class="img-fluid border-radus-5" src="https://images.adsttc.com/media/images/5478/7c74/e58e/ce98/5800/00fc/large_jpg/ESC_12_Masai1.jpg?1417182318" alt="">

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

                                            @if($post['id']==18)

                                            {!!$post['title']!!}
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="feature-images__six">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-06 " >
                                        <div class="image-box-wrap ">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-01-120x120.png" alt="">
                                                </div>
                                            </div>
                                            <div class="content mb-50">
                                            @foreach($posts as $post)

                                            @if($post['id']==19)

                                            {!!$post['title']!!}
                                            @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-06">
                                        <div class="image-box-wrap">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-02-120x120.png" alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                            @foreach($posts as $post)

                                                @if($post['id']==19)

                                                {!!$post['description']!!}
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>
                                <div class="col-lg-4 col-md-6 wow move-up">
                                    <!-- ht-box-icon Start -->
                                    <div class="ht-box-images style-06">
                                        <div class="image-box-wrap">
                                            <div class="box-image">
                                                <div class="default-image">
                                                    <img class="img-fulid" src="assets/images/icons/mitech-box-image-style-06-image-03-120x120.png" alt="">
                                                </div>
                                            </div>
                                            <div class="content">
                                            @foreach($posts as $post)

                                                @if($post['id']==19)

                                                {!!$post['description2']!!}
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ht-box-icon End -->
                                </div>

                            </div>
                        </div>
                        @foreach($posts as $post)

                        @if($post['id']==19)
                        <div class="section-under-heading text-center section-space--mt_60">{!!$post['description3']!!}</a></div>
                        @endif
                                                @endforeach
                    </div>
                </div>

            </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->






        <!--========= About Delivering Wrapper Start ===========-->
        <div class="about-delivering-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_20">
                        @foreach($posts as $post)
                                @if($post['id']==20)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                @foreach($posts as $post)
                                @if($post['id']==20)
                                {!!$post['description']!!}
                                @endif
                                                @endforeach
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                @foreach($posts as $post)
                                @if($post['id']==20)
                                {!!$post['description2']!!}
                                @endif
                                                @endforeach
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                @foreach($posts as $post)
                                @if($post['id']==20)
                                {!!$post['description3']!!}
                                @endif
                                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delivering-optimal-wrap">
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                @foreach($posts as $post)
                                @if($post['id']==21)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                @foreach($posts as $post)
                                @if($post['id']==21)
                                {!!$post['description']!!}
                                @endif
                                                @endforeach
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                @foreach($posts as $post)
                                @if($post['id']==21)
                                {!!$post['description2']!!}
                                @endif
                                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== fun fact Wrapper Start ==========-->
        <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 wow move-up">
                    @foreach($posts as $post)
                                @if($post['id']==22)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                    </div>
                    <div class="col-md-4 col-sm-6 wow move-up">
                    @foreach($posts as $post)
                                @if($post['id']==22)
                                {!!$post['description']!!}
                                @endif
                                                @endforeach
                    </div>
                    <div class="col-md-4 col-sm-6 wow move-up">
                    @foreach($posts as $post)
                                @if($post['id']==22)
                                {!!$post['description2']!!}
                                @endif
                                                @endforeach
                    </div>

                </div>
            </div>
        </div>
        <!--=========== fun fact Wrapper End ==========-->


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
                                                <img src="assets/images/brand/mitech-client-logo-01.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-01-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-02.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-02-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-03.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-03-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-04.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-04-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-05.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-05-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-06.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-06-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-07.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-07-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-08.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-08-hover.png" class="img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="assets/images/brand/mitech-client-logo-09.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="assets/images/brand/mitech-client-logo-09-hover.png" class="img-fluid" alt="">
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

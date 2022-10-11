@extends('layout.app')
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                    @foreach($posts as $post)
                                @if($post['id']==23)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-lg-12">
                        <div class="conact-us-wrap-one mb-30">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.740626035028!2d36.859983814655266!3d-1.3317375360528267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11a7efd46025%3A0xd11735299b07aaa9!2sDirectcore%20Technologies!5e0!3m2!1sen!2ske!4v1591092183653!5m2!1sen!2ske&zoom=9" width="1200" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                        @foreach($posts as $post)
                                @if($post['id']==24)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-form-wrap">
                            <form id="contact-form" action="{{ url('/contact') }}" method="post">
                                @csrf
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="con_name" type="text" placeholder="Name *">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_email" type="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="con_subject" type="text" placeholder="Subject *">
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="con_message"
                                                  placeholder="Please describe what you need."></textarea>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->

        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                        @foreach($posts as $post)
                                @if($post['id']==25)
                                {!!$post['title']!!}
                                @endif
                                                @endforeach
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--two text-center">
                            <a href="mailto:info@directcore.com" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i
                                            class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="tel:+254202325599" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i
                                            class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->


    </div>

@endsection

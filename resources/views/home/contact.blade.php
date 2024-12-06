@extends('home.base')

@section('content')

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('home/images/backgrounds/page-header-bg.jpg')}});">
        </div>

        <div class="page-header__shape-1 float-bob-y">
            <img src="{{asset('home/images/shapes/page-header-shape-1.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{asset('home/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>{{$pageName}}</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>{{$pageName}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-7 col-lg-6 mx-auto">
                    <div class="contact-page__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">contact us</span>
                            </div>
                            <h2 class="section-title__title">Have Questions? Contact
                                <br> with us <span>Anytime</span></h2>
                        </div>
                        <ul class="contact-page__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone-1"></span>
                                </div>
                                <div class="text">
                                    <p>Have any question?</p>
                                    <h3>Free <a href="tel:{{$web->phone}}">{{$web->phone}}</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text">
                                    <p>Send Email</p>
                                    <h3><a href="mailto:{{$web->email}}">{{$web->email}}</a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>Visit anytime</p>
                                    <h3>{{$web->address}}</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Google Map Start-->
    <section class="google-map-two">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__two" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->
@endsection

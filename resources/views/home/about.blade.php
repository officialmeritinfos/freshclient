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

    <!--About Four Start-->
    <section class="about-four">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-four__left">
                        <div class="about-four__img-box">
                            <div class="about-four__img">
                                <img src="{{asset('home/images/resources/about-four-img-1.jpg')}}" alt="">
                            </div>
                            <div class="about-four__img-two">
                                <img src="{{asset('home/images/resources/about-four-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Welcome to {{$siteName}}</span>
                            </div>
                            <h2 class="section-title__title">Get to Know About
                                 {{$siteName}}</h2>
                        </div>
                        <p class="about-four__text">
                            We are a business inclined profitable investment company with all the right tools
                            and experts to help you grow your investment.<br/>
                            The company trades cryptocurrency, buys and sells currencies, sells company shares,
                            makes loans to companies and also has an oil company.  In this way, the company generates
                            massive profits to pay customers daily, the company is a benchmark company and
                            has had a 5 years trading without loss and still counting, base on the companys
                            massive funding into online marketing research the company has been able to evolve
                            with the economy and continue to make customers proud .
                        </p>

                    </div>
                </div>
                <div class="col-xl-12 mt-5">
                    <div class="about-four__right">
                        <p class="about-four__text">
                            We have been around since 2010, thus a benchmark company, grown
                            and evolved with the economy, we used to invest in stocks, real estate, oil a
                            nd gas, now they also invest in cryptocurrency startups and tech startups.  <br/>
                            We have a working strategy and devote some of their resources to market
                            research.  We have had market wins for 5 years without a single loss.
                            This is the longest for the company to date.  Even if they make trading
                            losses, it doesn't matter that much that it affects their portfolio or
                            their clients, because they invest in different sectors, when a single
                            sector fails, we shift resources to another thriving sector.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->

    <!--Services Page Start-->
    <section class="services-page">
        <div class="container">
            <div class="section-title text-left">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline"></span>
                </div>
                <h2 class="section-title__title">Our
                    Services</h2>
            </div>
            <div class="row">

            @foreach($services as $service)
                <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title">
                                    <a href="{{route('service_detail',['id'=>$service->id])}}">
                                        {{$service->title}}
                                    </a>
                                </h3>
                            </div>
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{asset('home/images/'.$service->photo)}}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-pie-chart"></span>
                                </div>
                            </div>
                            <div class="services-one__read-more">
                                <a href="{{route('service_detail',['id'=>$service->id])}}">Read More<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                @endforeach

            </div>
        </div>
    </section>

@endsection

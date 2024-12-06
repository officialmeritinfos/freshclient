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
                <div class="col-xl-12">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Our Plans</span>
                            </div>
                            <h2 class="section-title__title">Investment
                                Packages</h2>
                        </div>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            @foreach($packages as $package)
                                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp mb-5 mx-auto" data-wow-duration="1s"
                                     data-wow-delay="0.1s" data-wow-offset="0"
                                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="pricing_design">
                                        <div class="single-pricing">
                                            <div class="price-head">
                                                <h2 class="text-center">{{$package->name}}</h2><hr/>
                                                <h4 class="text-center">{{$package->roi}}% {{$package->returnTypes->name}}</h4>
                                                <span></span>
                                            </div>
                                            <ul>
                                                <li><b>Minimum</b>  ${{number_format($package->minAmount,2)}}</li>
                                                <li><b>Maximum</b> @if($package->unlimited !=1)
                                                        ${{number_format($package->maxAmount,2)}}
                                                    @else
                                                        Unlimited
                                                    @endif
                                                </li>
                                                <li><b>{{$package->returnTypes->name}} returns</b> at {{$package->roi}}%</li>
                                                <li><b>Referral bonus</b> {{$package->referral}}%</li>
                                                <li><b>Contract</b> {{$package->Duration}}</li>
                                                <li><b>Total</b> {{$package->roi*$package->numberOfReturns}}%</li>
                                            </ul>
                                            <div class="pricing-price">

                                            </div>
                                            <a href="{{route('register')}}" class="price_btn">Invest Now</a>
                                        </div>
                                    </div>
                                </div><!--- END COL -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->

@endsection

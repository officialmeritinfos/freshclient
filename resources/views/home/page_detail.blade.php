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

    <!--Services Details Start-->
    <section class="services-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__left">
                        <div class="services-details__category">
                            <h3 class="services-details__category-title">Categories</h3>
                            <ul class="services-details__category-list list-unstyled">
                                @foreach($services as $servic)
                                    <li class="{{(url()->current()==route('service_detail',['id'=>$servic->id]))?'active':''}} ">
                                        <a href="{{route('service_detail',['id'=>$servic->id])}}">
                                            {{$servic->title}}
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="services-details__need-help">
                            <div class="services-details__need-help-bg"></div>
                            <div class="services-details__need-help-icon">
                                <span class="icon-consultant"></span>
                            </div>
                            <h3 class="services-details__need-help-title">Join
                                <br> the Best
                                <br> Platform</h3>
                            <div class="services-details__need-help-btn-box">
                                <a href="{{route('register')}}" class="services-details__need-help-btn thm-btn">
                                    Register Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__right">
                        <div class="services-details__img">
                            <img src="{{asset('home/images/'.$service->photo)}}" alt="">
                            <div class="services-details__icon">
                                <span class="icon-insurance"></span>
                            </div>
                        </div>
                        <h3 class="services-details__title-1">{{$service->title}}</h3>
                        <p class="services-details__text-1">
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>

                        <div class="services-details__points">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="services-details__points-single">
                                        <div class="icon">
                                            <span class="icon-writer"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Individual Solution</h3>
                                            <p>We have streamlined solutions for individuals</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="services-details__points-single">
                                        <div class="icon">
                                            <span class="icon-data-analysis"></span>
                                        </div>
                                        <div class="content">
                                            <h3>Market Experts</h3>
                                            <p>With over a Decade of experience, we havebuilt the most formidable solution.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Details End-->



@endsection

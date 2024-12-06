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

    <!--Faq Page Start-->
    <section class="faq-page mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What is {{$siteName}}?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{$siteName}} our company provides a full investment service focused on the
                                            bitcoin and cryptocurrency market We are among the best platforms to invest and grow your
                                            bitcoin and other cryptocurrency
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>Is {{$siteName}} a registered and legal company?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{$siteName}} is registered in {{$web->address}}.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What is the profitability of the program?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Profitability depends on the investment plan you have chosen. We offer three groups of
                                            investment plans with different specialization and investment terms
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How does {{$siteName}} earn income for investors?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            We trade on cryptocurrency exchanges and participate in highly profitable
                                            investment transactions. {{$siteName}} is a platform with automated elements of trading
                                            on cryptocurrency, asset management based on advanced AI risk management, Blockchain
                                            technologies and protocol for fast orders delivery.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How do I create my account?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Registration process is very easy and will take a few moments to complete Simply click CREATE
                                            ACCOUNT button  and fill in all the required fields
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How do I make a deposit?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            To deposit funds in your trading account is quick and simple For your
                                            convenience you may choose one of the several available deposit methods To make a successful
                                            deposit please follow the steps below Login to your account Click on the DEPOSITS button in the
                                            DASHBOARD section Choose the deposit option And follow the steps to complete your transaction
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How do I make a withdrawal?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            To make a withdrawal request click the WITHDRAW button at the top center of
                                            your {{$siteName}} account dashboard and input the required details to withdraw.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Faq Page End-->

@endsection

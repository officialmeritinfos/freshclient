@extends('home.base')
@section('content')

    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
             data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider__slide-1">
                <div class="main-slider__bg"
                     style="background-image: url({{asset('home/images/backgrounds/stocks.jpeg')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="{{asset('home/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">{{$siteName}}</p>
                        <h2 class="main-slider__title">Take Your Investment  <br>
                            Strategy To The Next Level</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{route('register')}}" class="main-slider__btn thm-btn">
                                Create Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-2">
                <div class="main-slider__bg"
                     style="background-image: url({{asset('home/images/backgrounds/etfs.jpeg')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="{{asset('home/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">{{$siteName}}</p>
                        <h2 class="main-slider__title">International Network To <br>
                            Maximize Your Profit</h2>
                        <div class="main-slider__btn-box">
                            <a href="{{route('register')}}" class="main-slider__btn thm-btn">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item main-slider__slide-3">
                <div class="main-slider__bg"
                     style="background-image: url({{asset('home/images/realestate.jpeg')}});">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider__shadow"></div>
                <div class="main-slider__shape-1 float-bob-y">
                    <img src="{{asset('home/images/shapes/main-slider-shape-1.png')}}" alt="">
                </div>
                <div class="main-slider__shape-3">
                    <img src="{{asset('home/images/shapes/main-slider-shape-3.png')}}" alt="">
                </div>
                <div class="main-slider__shape-4">
                    <img src="{{asset('home/images/shapes/main-slider-shape-4.png')}}" alt="">
                </div>
                <div class="container">
                    <div class="main-slider__content">
                        <p class="main-slider__sub-title">Sustainable Real Estate</p>
                        <h2 class="main-slider__title">Real Estate <br>
                            Investment Strategy</h2>
                        <div class="main-slider__btn-box">
                            <a href="about" class="main-slider__btn thm-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Main Sllider Start -->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->

    <!-- pricing-section end -->
    <!--About Four Start-->
    <section class="about-one" style="padding:0px;
 margin-top:60px; ">
        <div class="container">

            <div class="row clearfix">
                            <div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp mb-5 mx-auto text-center" data-wow-duration="1s"
                                 data-wow-delay="0.1s" data-wow-offset="0"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                               <!-- Crypto Converter ⚡ Widget --><crypto-converter-widget shadow symbol live background-color="#383a59" border-radius="0.60rem" fiat="united-states-dollar" crypto="bitcoin" amount="1" decimal-places="2"></crypto-converter-widget><a href="https://currencyrate.today/" target="_blank" rel="noopener">CurrencyRate.Today</a><script async src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget@1.5.2/dist/latest.min.js"></script><!-- /Crypto Converter ⚡ Widget -->

                            </div><!--- END COL -->
                        </div>
        </div>
    </section>
    <!-- pricing-section end -->





    <!--About One Start-->
    <section class="about-one" style="padding:0px;
 margin:0px; ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="{{asset('home/images/resources/about-one-img-1.jpg')}}" alt="">

                            </div>
                            <div class="about-one__img-2">
                                <img src="{{asset('home/images/resources/about-one-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Welcome to {{$siteName}}</span>
                            </div>
                            <h2 class="section-title__title">Delivering the Best
                                Investment Experience</h2>
                        </div>
                        <p class="about-one__text">
                            Welcome to our innovative platform, where we merge the worlds of real estate, cryptocurrency investments,
                            mining, and trading with the power of artificial intelligence (AI). Our cutting-edge platform
                            utilizes advanced algorithms and machine learning to provide you with intelligent insights,
                            real-time analysis, and automated strategies, all tailored to optimize your cryptocurrency
                            endeavors.<br/>
                            Whether you're an individual investor looking to make informed decisions, a mining enthusiast
                            seeking maximum efficiency, or a trader aiming to maximize profits, our platform has you covered.
                            With our AI-powered solutions, you can stay ahead of the curve in the dynamic and volatile
                            cryptocurrency market, or earn high returns in Real Estate and ETFs
                        </p>
                        <div class="about-one__points-and-experience">
                            <div class="about-one__points-box">
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Real Estate Moguls</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Cryptocurrency Mining</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="about-one__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Stocks Trading </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Oil & Gas Mining</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__experience-box">
                                <div class="about-one__experience-icon">
                                    <span class="icon-certificate"></span>
                                </div>
                                <div class="about-one__experience-text">
                                    <p>10 Years+ of Consulting Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="about-one__btn-box">
                            <div class="about-one__shape-3 float-bob-x">
                                <img src="{{asset('home/images/shapes/about-one-shape-3.png')}}" alt="">
                            </div>
                            <a href="{{url('about')}}" class="about-one__btn thm-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->


    <!--Expectation One Start-->
    <section class="expectation-one">
        <div class="expectation-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(assets/images/backgrounds/expectation-one-bg.jpg);"></div>
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">Our Features</span>
            </div>
            <h2 class="section-title__title">Why
                Choose Us?</h2>
        </div>
        <div class="expectation-one__inner">
            <div class="container">
                <ul class="expectation-one__points list-unstyled row">

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">AI-Driven Expertise</a>
                        </h3>
                        <p class="expectation-one__text">
                            Our advanced AI algorithms enable us to make data-driven Financial decisions,
                            optimizing
                            returns and minimizing risks.
                        </p>
                    </li>

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Extensive Industry Knowledge</a>
                        </h3>
                        <p class="expectation-one__text">
                            Our team of experts brings years of experience and deep understanding of the
                            mining sector for Gold and precious metals, oil and gas, and mining sectors.
                        </p>
                    </li>

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Diversified Portfolio</a>
                        </h3>
                        <p class="expectation-one__text">
                            We offer a well-balanced portfolio across multiple sectors, ensuring risk mitigation
                            and
                            maximizing potential returns.
                        </p>
                    </li>

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Access to Lucrative Opportunities</a>
                        </h3>
                        <p class="expectation-one__text">
                            Through our extensive network and market research, we identify and enroll in
                            high-potential
                            opportunities that may be inaccessible to individual members.
                        </p>
                    </li>

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Sustainable Projects</a>
                        </h3>
                        <p class="expectation-one__text">
                            We prioritize projects in sustainable and environmentally responsible ventures,
                            aligning
                            with the growing demand for ethical project options.
                        </p>
                    </li>
                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Transparent Approach</a>
                        </h3>
                        <p class="expectation-one__text">
                            We believe in open communication and provide our clients with clear and transparent
                            reporting
                            on project performance and strategy.
                        </p>
                    </li>
                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Risk Management</a>
                        </h3>
                        <p class="expectation-one__text">
                            Our team employs rigorous risk management strategies to protect and grow our clients'
                            capitals.
                        </p>
                    </li>
                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Proven Track Record</a>
                        </h3>
                        <p class="expectation-one__text">
                            We have a demonstrated history of successful projects and satisfied clients, showcasing
                            our ability to generate consistent returns.
                        </p>
                    </li>

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Flexibility</a>
                        </h3>
                        <p class="expectation-one__text">
                            We offer project options suitable for different risk appetites and project horizons,
                            tailoring our services to meet individual client needs.
                        </p>
                    </li>

                    <li class="col-md-4">
                        <div class="icon">
                            <span class="icon-strategy"></span>
                        </div>
                        <h3 class="expectation-one__title">
                            <a href="#">Global Perspective</a>
                        </h3>
                        <p class="expectation-one__text">
                            Our project approach considers global trends and market dynamics, providing exposure
                            to diverse geographical regions and economies.
                        </p>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--Expectation One End-->

    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg" style="background-image: url({{asset('home/images/backgrounds/services-one-bg.png')}});">
        </div>
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">How To Join</span>
                                </div>
                                <h2 class="section-title__title">Investor
                                    Onboarding Process</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text">
                                Here's a description of how you can join us at {{$siteName}}. Our work process is
                                simple and direct, and laced with expertise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link active"
                            id="ex2-tab-1"
                            data-bs-toggle="tab"
                            href="#ex2-tabs-1"
                            role="tab"
                            aria-controls="ex2-tabs-1"
                            aria-selected="true"
                        >Register</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex2-tab-2"
                            data-bs-toggle="tab"
                            href="#ex2-tabs-2"
                            role="tab"
                            aria-controls="ex2-tabs-2"
                            aria-selected="false"
                        >Select Pack</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex2-tab-3"
                            data-bs-toggle="tab"
                            href="#ex2-tabs-3"
                            role="tab"
                            aria-controls="ex2-tabs-3"
                            aria-selected="false"
                        >Fund</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                            class="nav-link"
                            id="ex2-tab-4"
                            data-bs-toggle="tab"
                            href="#ex2-tabs-4"
                            role="tab"
                            aria-controls="ex2-tabs-4"
                            aria-selected="false"
                        >Withdraw</a
                        >
                    </li>
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                    <div
                        class="tab-pane fade show active"
                        id="ex2-tabs-1"
                        role="tabpanel"
                        aria-labelledby="ex2-tab-1"
                    >
                        <section class="sip-Calculator pt-60 pb-120  tab-pane fade show active" id="sip">
                            <div class="container">
                                <div class="sip-calculator__box" id="sip-calculator-sinace">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-12">
                                            <div class="slider-box">
                                                <div class="main-heading block-title text-left">
                                                    <h3 class="block-title__title w-500">Create Account</h3>
                                                </div>

                                                <p class="services-one__text">
                                                    To join us at {{$siteName}}, firstly you have to register for a
                                                    new account. “Enroll in” to Fill your credentials in required column
                                                    to create a personal trading account.
                                                </p>

                                                <div class="about-one__points-and-experience">
                                                    <div class="about-one__points-box">
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Free to Register</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Free Advisory Call</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>No Country Restriction </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  <!-- calculator -->

                    </div>
                    <div
                        class="tab-pane fade"
                        id="ex2-tabs-2"
                        role="tabpanel"
                        aria-labelledby="ex2-tab-2"
                    >
                        <section class="sip-Calculator pt-60 pb-120  tab-pane fade show active" id="sip">
                            <div class="container">
                                <div class="sip-calculator__box" id="sip-calculator-sinace">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-12">
                                            <div class="slider-box">
                                                <div class="main-heading block-title text-left">
                                                    <h3 class="block-title__title w-500">Select Package</h3>
                                                </div>

                                                <p class="services-one__text">
                                                    Choose the investment plan that suits your budget and financial goals.
                                                </p>

                                                <div class="about-one__points-and-experience">
                                                    <div class="about-one__points-box">
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Adaptive share packages</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Variable ROI on Plans</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Variety of Options </p>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Plans are in Smart Contract </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  <!-- calculator -->
                    </div>
                    <div
                        class="tab-pane fade"
                        id="ex2-tabs-3"
                        role="tabpanel"
                        aria-labelledby="ex2-tab-3"
                    >
                        <section class="sip-Calculator pt-60 pb-120  tab-pane fade show active" id="sip">
                            <div class="container">
                                <div class="sip-calculator__box" id="sip-calculator-sinace">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-12">
                                            <div class="slider-box">
                                                <div class="main-heading block-title text-left">
                                                    <h3 class="block-title__title w-500">Fund Deposit</h3>
                                                </div>

                                                <p class="services-one__text">
                                                    After choosing a preferred Plan from your dashboard, proceed to generate
                                                    and copy the recipient Usdt or Btc wallet for your account.<br/>
                                                    1. Deposit local currency into your Binance or preferred exchange wallet
                                                    in order to buy USDT.<br/>
                                                    2. Buy USDT in Binance using your local currency.<br/>
                                                    3. Send USDT from your Binance wallet to your {{$siteName}} Trading account
                                                    in order for your investment to kickoff.<br/>
                                                    4. Confirm transactions and User ID on required column to Activate
                                                    deposits
                                                </p>

                                                <div class="about-one__points-and-experience">
                                                    <div class="about-one__points-box">
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Direct funding</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Zero cost of funding</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Secure electronic channels</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  <!-- calculator -->
                    </div>
                    <div
                        class="tab-pane fade"
                        id="ex2-tabs-4"
                        role="tabpanel"
                        aria-labelledby="ex2-tab-4"
                    >
                        <section class="sip-Calculator pt-60 pb-120  tab-pane fade show active" id="sip">
                            <div class="container">
                                <div class="sip-calculator__box" id="sip-calculator-sinace">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-12">
                                            <div class="slider-box">
                                                <div class="main-heading block-title text-left">
                                                    <h3 class="block-title__title w-500">Withdraw</h3>
                                                </div>

                                                <p class="services-one__text">
                                                    At the end of your trading cycle when your profit becomes available
                                                    in your account balance and eligible to be withdrawn to your local
                                                    wallet exchange, in the currency available in your region.
                                                </p>

                                                <div class="about-one__points-and-experience">
                                                    <div class="about-one__points-box">
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Instant Withdrawal to exchange</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="about-one__points-list list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="fa fa-check"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Everyday withdrawal from account balance</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  <!-- calculator -->
                    </div>

                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </section>
    <!--Services One End-->

    <!--Grow Business Start-->
    <section class="grow-business">
        <div class="container">
            <div class="grow-business__inner">
                <div class="grow-business__bg"
                     style="background-image: url({{asset('home/images/backgrounds/grow-business-bg.jpg')}});"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="grow-business__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">
                                        HIGHER YIELD ON INVESTMENT
                                    </span>
                                </div>
                                <h2 class="section-title__title">AI-powered Investment Strategy</h2>
                            </div>
                            <p class="grow-business__text">
                                With {{$siteName}}, harness the potential of
                                artificial intelligence to elevate your cryptocurrency
                                investments, mining operations, and trading
                                endeavors to new
                                heights. Experience x10 of revenue earning in hours.
                            </p>
                            <ul class="grow-business__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Automated Returns</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Higher input  & Output efficiency</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Global accessibility</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="grow-business__progress">
                                <h4 class="grow-business__progress-title">Efficiency</h4>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="99%">
                                        <div class="count-text">99%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="grow-business__right">
                            <div class="grow-business__shape-1 float-bob-x">
                                <img src="{{asset('home/images/shapes/grow-business-shape-1.png')}}" alt="">
                            </div>
                            <ul class="grow-business__right-points list-unstyled">
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-experience"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">Benefit by Investing
                                        <br> with us</h3>
                                    <p class="grow-business__right-points-text">
                                        A secured platform that allows you multiply your earning in a matter
                                        of days.
                                    </p>
                                </li>
                                <li>
                                    <div class="grow-business__right-points-icon">
                                        <span class="icon-consumer-behavior"></span>
                                    </div>
                                    <h3 class="grow-business__right-points-title">The most Time-efficient
                                        <br> Mining</h3>
                                    <p class="grow-business__right-points-text">
                                        With the introduction of Artificial Intelligence into our platform,
                                        we have optimized the hashing rates of our solutions.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Grow Business End-->

    <!--Video One Start-->
    <section class="video-one">
        <div class="video-one__bg" style="background-image: url({{asset('home/images/backgrounds/video-one-bg.jpg')}});"></div>
        <div class="container">
            <div class="video-one__inner">
                <div class="video-one__video-link">
                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                        <div class="video-one__video-icon">
                            <img src="{{asset('home/images/')}}" alt="">
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
                <h3 class="video-one__title">{{$siteName}} bridges the gap
                    <br> and makes your revenue simple</h3>
                <div class="video-one__btn-box">
                    <a href="{{route('register')}}" class="video-one__btn thm-btn">Create an account</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->

    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one__bg"
             style="background-image: url({{asset('home/images/backgrounds/testimonial-one-bg.jpg')}});"></div>
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-lg-4">
                    <div class="testimonial-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">our feedbacks</span>
                            </div>
                            <h2 class="section-title__title">Clients are
                                Talking</h2>
                        </div>
                        <p class="testimonial-one__left-text">
                            Do not take our words for it. Read it from others
                        </p>
                        <!--<div class="testimonial-one__rounded-text">-->
                        <!--    <a href="#" class="testimonial-one__curved-circle-box">-->
                        <!--        <div class="curved-circle">-->
                        <!--                <span class="curved-circle--item">-->
                        <!--                    380 satisfied clients-->
                        <!--                </span>-->
                        <!--        </div><!-- /.curved-circle -->-->
                        <!--        <div class="testimonial-one__icon">-->
                        <!--            <img src="{{asset('home/images/'.$web->logo)}}" alt="" style="width:50px;">-->
                        <!--        </div>-->
                        <!--    </a>-->
                        <!--</div>-->
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="testimonial-one__right">
                        <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel"
                             data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>

                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="https://ui-avatars.com/api/?name=Nelson+E" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">
                                            They offers a lot of
                                            successful opportunity to their investors and they are well secured
                                            in best standard level. I really appreciate all the Team
                                            for all their good work.
                                        </p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Nelson E.</a></h3>
                                        <p>Investor</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->

                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="https://ui-avatars.com/api/?name=Judy+F" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">
                                            Actually, i have been so excited and I also feel much
                                            comfortable since I started investing in {{$siteName}} company.
                                        </p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Judy F.</a></h3>
                                        <p>Investor</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->

                            <!--Testimonial One Single Start-->
                            <div class="item">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__content">
                                        <div class="testimonial-one__shape-1"></div>
                                        <div class="testimonial-one__shape-2"></div>
                                        <div class="testimonial-one__img">
                                            <img src="https://ui-avatars.com/api/?name=Thomas+J" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <p class="testimonial-one__text">
                                            Investing in Cryptocurrency could be overwhelming, but with {{$siteName}}'s
                                            help and service, it has been a seamless journey for me
                                        </p>
                                    </div>
                                    <div class="testimonial-one__client-info">
                                        <h3><a href="#">Thomas J.</a></h3>
                                        <p>Investor</p>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->


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



    <!--Services One Start-->
    <section class="services-one">
        <div class="services-one__bg" style="background-image: url(assets/images/backgrounds/services-one-bg.png);">
        </div>
        <div class="container">
            <div class="services-one__top">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="services-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">what we’re doing</span>
                                </div>
                                <h2 class="section-title__title">Our
                                    Selected Assets</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services-one__right">
                            <p class="services-one__text">
                                Here are our major instruments from which we build investors' portfolios. These instruments
                                and their underlying assets were carefully selected, using high-end fundamental and
                                technical analysis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-one__bottom">
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
                                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
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
        </div>
    </section>
    <!--Services One End-->


    <!--Counter One Start-->
    <section class="counter-one">
        <div class="counter-one__inner">
            <div class="counter-one__shadow"></div>
            <div class="counter-one__bg"
                 style="background-image: url({{asset('home/images/backgrounds/counter-one-bg.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="counter-one__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">fun facts</span>
                                </div>
                                <h2 class="section-title__title">Our Statistics</h2>
                            </div>
                            <p class="counter-one__text">
                                With over 10 years of experience, we have built the best platform that enables you
                                to earn at your convenience.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="counter-one__right">
                            <ul class="counter-one__count-box list-unstyled">
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-checking"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="88600" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Total Investments Completed</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-recommend"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="6000" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Satisfied Investors</p>
                                </li>
                                <li>
                                    <div class="counter-one__icon">
                                        <span class="icon-consulting"></span>
                                    </div>
                                    <div class="counter-one__count count-box">
                                        <h3 class="count-text" data-stop="60" data-speed="1500">00</h3>
                                    </div>
                                    <p class="counter-one__text">Expert Staff</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Counter One End-->


    <!--Contact One Start-->
    <section class="contact-one">
        <div class="contact-one__bg" style="background-image: url({{asset('home/images/backgrounds/contact-one-bg.jpg')}});">
        </div>
        <div class="contact-one__shape-1 float-bob-x">
            <img src="{{asset('home/images/shapes/contact-one-shape-2.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">contact us</span>
                            </div>
                            <h2 class="section-title__title">Have Questions? Contact
                                <br> with us Anytime</h2>
                        </div>
                        <ul class="contact-one__points list-unstyled">
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
    <!--Contact One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our News Updates</span>
                </div>
                <h2 class="section-title__title">Latest Articles &
                    <br> News from the Blogs</h2>
            </div>
            <div class="row">

                <!--News One Single Start-->
                <div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <rssapp-wall id="tUnw8WjWtYT1oJ3Z"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>
                <!--News One Single End-->

            </div>
        </div>
    </section>
    <!--News One End-->

@endsection

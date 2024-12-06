<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$pageName}} - {{$siteName}}</title>
    <meta name="author" content="{{$siteName}}">
    <meta name="description" content="{{$siteName}} | The best investment strategies to build your fortune">
    <meta name="keywords" content="business, corporate, cryptocurrency, investment, finance, network, passive, income, earn">
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('home/images/mentochain-white.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('home/images/mentochain-white.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/mentochain-white.png')}}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/sinace-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('home/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('home/css/sinace.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/sinace-responsive.css')}}" />
    <style>
        .pricing-content{position:relative;}
        .pricing_design{
            position: relative;
            margin: 0px 15px;
        }
        .pricing_design .single-pricing{
            background:#00008B;
            padding: 60px 40px;
            border-radius:30px;
            box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
            position: relative;
            z-index: 1;
        }
        .pricing_design .single-pricing:before{
            content: "";
            background-color: #fff;
            width: 100%;
            height: 100%;
            border-radius: 18px 18px 190px 18px;
            border: 1px solid #eee;
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
        }
        .price-head{}
        .price-head h2 {
            margin-bottom: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        .price-head h1 {
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 5px;
        }
        .price-head span{}

        .single-pricing ul{list-style:none;margin-top: 30px;}
        .single-pricing ul li {
            line-height: 36px;
        }
        .single-pricing ul li i {
            background: #00008B;
            color: #fff;
            width: 20px;
            height: 20px;
            border-radius: 30px;
            font-size: 11px;
            text-align: center;
            line-height: 20px;
            margin-right: 6px;
        }
        .pricing-price{}

        .price_btn {
            background: #00008B;
            padding: 10px 30px;
            color: #fff;
            display: inline-block;
            margin-top: 20px;
            border-radius: 2px;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }
        .price_btn:hover{background:#0aa1d6;}
        a{
            text-decoration:none;
        }

        .text-center {
            text-align: center!important;
        }

    </style>
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>





<div class="preloader">
    <div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
    <header class="main-header">
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__logo">
                        <a href="{{url('/')}}"><img src="{{asset('home/images/'.$web->logo)}}" alt="" style="width:100px;"></a>
                    </div>
                    <div class="main-menu__call">
                        <div class="main-menu__call-icon">
                            <span class="icon-telephone"></span>
                        </div>
                        <div class="main-menu__call-content">
                            <p class="main-menu__call-sub-title">Call Anytime</p>
                            <h5 class="main-menu__call-number"><a href="tel:{{$web->phone}}">{{$web->phone}}</a></h5>
                        </div>
                    </div>
                    <div class="main-menu__wrapper-inner-content">
                        <div class="main-menu__top">
                            <div class="main-menu__top-inner">
                                <div class="main-menu__top-left">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:{{$web->email}}">{{$web->email}}</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <p>{{$web->address}}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__top-right">
                                    <ul class="list-unstyled main-menu__top-menu">
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__bottom">
                            <div class="main-menu__bottom-inner">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('about')}}">About</a> </li>
                                        <li><a href="{{url('service')}}">Services</a></li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{url('faqs')}}">FAQs</a></li>
                                                <li><a href="{{url('terms')}}">Terms and Conditions</a></li>
                                                <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Account</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('login')}}">Login</a></li>
                                                <li><a href="{{route('register')}}">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('plans')}}">Packages</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="main-menu__right">
                                    <div class="main-menu__btn-box">
                                        <a href="{{route('register')}}" class="thm-btn main-menu__btn">
                                            Create account
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

@yield('content')

<!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer__shape-1 float-bob-x">
            <img src="{{asset('home/images/shapes/site-footer-shape-1.png')}}" alt="">
        </div>
        <div class="site-footer__bg" style="background-image: url({{asset('home/images/backgrounds/site-footer-bg.png')}});">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <div class="footer-widget__logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('home/images/mentochain-white.png')}}" alt="" style="width:100px;">
                                </a>
                            </div>
                            <p class="footer-widget__about-text">
                                {{$siteName}} one of the worlds largest investment financial organisations, that have been in existence
                                since 2010 still date..
                                We bring big profits and challenge the loss. We work with our clients, not at them.
                            </p>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Explore</h3>
                            </div>
                            <ul class="footer-widget__link-list list-unstyled">
                                <li><a href="{{url('about')}}">About Us</a></li>
                                <li><a href="{{url('service')}}">Services</a></li>
                                <li><a href="{{url('faqs')}}">FAQs</a></li>
                                <li><a href="{{url('terms')}}">Terms and Conditions</a></li>
                                <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__link">
                            <div class="footer-widget__title-box">
                                <h3 class="footer-widget__title">Contact</h3>
                            </div>
                            <div class="mc-form__response"></div>
                            <ul class="footer-widget__Contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:{{$web->email}}">{{$web->email}}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-phone-square"></span>
                                    </div>
                                    <div class="text">
                                        <a href="tel:{{$web->phone}}">{{$web->phone}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© Copyright 2010 - {{date('Y')}} by
                                <a href="#">{{$siteName}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{url('/')}}" aria-label="logo image">
                <img src=""{{asset('home/images/'.$web->logo)}}" width="135" alt="" />
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{$web->email}}">{{$web->email}}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{$web->phone}}">{{$web->phone}}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->




    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->



<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


<script src="{{asset('home/vendors/jquery/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('home/vendors/jarallax/jarallax.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/vendors/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('home/vendors/odometer/odometer.min.js')}}"></script>
<script src="{{asset('home/vendors/swiper/swiper.min.js')}}"></script>
<script src="{{asset('home/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
<script src="{{asset('home/vendors/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('home/vendors/wow/wow.js')}}"></script>
<script src="{{asset('home/vendors/isotope/isotope.js')}}"></script>
<script src="{{asset('home/vendors/countdown/countdown.min.js')}}"></script>
<script src="{{asset('home/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('home/vendors/vegas/vegas.min.js')}}"></script>
<script src="{{asset('home/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('home/vendors/timepicker/timePicker.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.circleType.js')}}"></script>
<script src="{{asset('home/vendors/circleType/jquery.lettering.min.js')}}"></script>
<script src="{{asset('home/vendors/highcharts/highcharts.min.js')}}"></script>
<script src="{{asset('home/vendors/touch/touch-paid-min.js')}}"></script>
<script src="{{asset('home/js/sip-calculator.js')}}"></script>
<script src="{{asset('home/js/lumpsum-calculator.js')}}"></script>
<script src="{{asset('home/js/inflation.js')}}"></script>
<script src="{{asset('home/js/target-amount-calculator.js')}}"></script>
<script src="{{asset('home/js/tab.js')}}"></script>
<script src="{{asset('home/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- template js -->
<script src="{{asset('home/js/sinace.js')}}"></script>

<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element">
</div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Google language End -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('.popup-video').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                            '<div class="mfp-close"></div>'+
                            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                        '</div>',
            }
        });
    });
</script>
</body>
</html>

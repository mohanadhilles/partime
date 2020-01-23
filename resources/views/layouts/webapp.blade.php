<?php
if (!isset($seo)) {
    $seo = (object) array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
        <!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" type="text/css" href="{{asset('web/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/fontawesome5.10.2/css/all.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="web/css/jquery.fancybox.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/owlslider/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('web/images/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('web/images/logo.png')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }} | {{ $seo->seo_title }}</title>
    <!--	<link rel="icon" href="web/img/logo.png" type="image/png" >-->
</head>

<body>
<!-- Side Menu -->
<aside class="side-menu">
    <div class="text-left">
        <button class="bg-transparent border-0 btn text-muted btn-lg" id="closeMenu">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="scroll-menu">
        <nav>
            <ul>
                <li class="active">
                    <a href="web/#">الرئيسية</a>
                </li>
                <li>
                    <a href="web/#">عن بارتايم</a>
                </li>
                <li>
                    <a href="web/#">اتصل بنا</a>
                </li>
                       @auth

                        <li class="nav-item">
                        <a class="nav-link pull-left"  href="{{ route('my.profile') }}" >مرحبا ,  {{ Auth::user()->name }}</a>
                    </li>
                      @endguest

            </ul>
              @guest
            <div class="btns">
                <a href="{{url('login')}}" class="btn btn-deep-blue new-user mb-2 d-block">مستخدم جديد</a>
                <a href="{{url('register')}}" class="btn btn-blue-light login mb-2 d-block">تسجيل دخول</a>
            </div>

            @else
                 <div class="btns">
                <a href="{{url('logout')}}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-danger new-user mb-2 d-block">
                  {{ __('Logout') }}</a>
                   <a href="{{url('home')}}" class="btn btn-blue-light login mb-2 d-block">لوحة التحكم</a>
            </div>

            @endguest
        </nav>
    </div>
</aside>
<div class="side-overlay"></div>
<!-- Side Menu -->
<header id="header" class="main-header wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <button type="button" class="navbar-toggler btn btn-outline-light " id="openMenu">
                <i class="fa fa-align-right fa-fw"></i>
            </button>
            <a class="navbar-brand" href="web/#">
                <img src="{{asset('web/images/logo.png')}}" class="img-fluid d-none d-lg-inline">
                <img src="{{asset('web/images/white-logo.png')}}" class="img-fluid d-lg-none d-xl-none">
            </a>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="navbar-nav mr-2 main-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="web/#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="web/#">عن بارتايم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="web/#">اتصل بنا</a>

                    </li>
                     @auth

                        <li class="nav-item">
                        <a class="nav-link pull-left" style="padding-right:200px" href="{{ route('my.profile') }}" >مرحبا ,  {{ Auth::user()->name }}</a>
                    </li>
                      @endguest
                </ul>
               @guest
                <div class="auth-action ml-auto">
                    <a href="{{url('register')}}" class="btn btn-deep-blue new-user ml-md-2">مستخدم جديد</a>
                    <a href="{{url('login')}}" class="btn btn-blue-light login">تسجيل دخول</a>
                </div>
                       @else



                                  <div class="auth-action ml-auto ">


                <a href="{{url('logout')}}"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="btn btn-danger new-user mb-2 d-block">
                  {{ __('Logout') }} </a>
                    <a href="{{url('home')}}" class="btn btn-blue-light login">لوحة التحكم </a>
             </div>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                        @endguest
            </div>
        </nav>
    </div>
</header><!-- /header -->



     @yield('content')



<a href="web/#" class="scrollToTop"><i class="fas fa-arrow-up fa-2x"></i></a>

<footer id="footer" class="main-footer">
    <div class="container">
        <div class="top">
            <div class="row align-items-center">
                <div class="col-lg-4  col-md-6">
                    <div class="w-about">
                        <div class="f-logo">
                            <a href="web/">
                                <img src="{{asset('web/images/footer-logo.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <p><i class="fas fa-map-marker-alt"></i> مركز منشأت - واجهة الرياض - مجمع ريادة الأعمال
                            الرياض - المملكة العربية السعودية </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6">
                    <div class="w-apps">
                        <p>التطبيق قريبا ًمتاح علي منصات</p>
                        <div class="apps-links">
                            <a href="web/" onclick="return false;" target="_blank" title="">
                                <img src="{{asset('web/images/icon-google.png')}}" alt="">
                            </a>
                            <a href="web/" onclick="return false;" target="_blank" title="">
                                <img src="{{asset('web/images/icon-apple.png')}}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="social text-center">
                        <!-- <a href="web/" target="_blank"><i class="fab fa-facebook-f"></i></a> -->
                        <a href="https://twitter.com/par_time_app?s=09" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/part-time-app" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        <a href="http://instagram.com/par_time_app" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        <a href="https://www.snapchat.com/add/parttime_app" target="_blank"><i
                                    class="fab fa-snapchat-ghost"></i></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <ul class="nav nav-fill pages">
                        <li> <a  target="_blank" class="nav-link copyright"><i
                                        class="fas fa-prescription"></i>سياسة الخصوصية</a></li>
                        <li><a  target="_blank" class="nav-link copyright"><i class="fas fa-list"></i>الشروط
                                والاحكام </a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="bottom d-flex justify-content-between">
            <p class="copyright">جميع الحقوق الحقوق محفوظة لصالح تطبيق بارتايم</p>
            <a href="web/" class="site">www.par-time.com</a>

        </div>

    </div>
</footer><!-- /footer -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('web/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('web/js/popper.min.js')}}"></script>
<script src="{{asset('web/js/wow.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>

<script src="{{asset('web/plugins/owlslider/owl.carousel.min.js')}}"></script>
<!-- <script src="web/plugins/owlslider/owl.carousel.min.js"></script> -->
<!-- <script src="web/plugins/fancybox/jquery.fancybox.min.js"></script> -->
<script src="{{asset('web/js/main.js')}}"></script>
<script type="text/javascript">
    $('.projects_slider').owlCarousel({
        // center: true,
        items: 4,
        loop: true,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-arrow-right' title='السابق'></i>", "<i class='fas fa-arrow-left' title='التالي'></i>"],
        dots: false,
        autoplay: true,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 10,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1.25,
                center: true,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 3,
            },
            // breakpoint from 768 up
            992: {
                items: 4,
            }
        }
    });
    $('.team_slider').owlCarousel({
        // center: true,
        items: 4,
        loop: true,
        rtl: true,
        nav: false,
        navText: ["<i class='fas fa-arrow-right' title='السابق'></i>", "<i class='fas fa-arrow-left' title='التالي'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 10,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1.25,
                center: true,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 3,
            },
            // breakpoint from 768 up
            992: {
                items: 4,
            }
        }
    });
</script>
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5e0db55e27773e0d832b7e13/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();


$(document).ready(function () {

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 5) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

});


</script>
<!--End of Tawk.to Script-->


</body>

</html>

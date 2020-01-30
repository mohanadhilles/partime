<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/fontawesome5.10.2/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/plugins/owlslider/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('web/images/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('web/images/logo.png')}}" type="image/x-icon">
    <title>Par Time</title>
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
                    <a href="{{url('/')}}">الرئيسية</a>
                </li>
                <li>
                    <a href="#">عن بارتايم</a>
                </li>
                <li >
                    <a href="#">اتصل بنا</a>
                </li>
            </ul>
            <div class="btns">
                <a href="https://partime.typeform.com/to/uHkTAY" target="__blank" class="btn btn-deep-blue new-user mb-2 d-block">مستخدم جديد</a>
                <a href="{{url('login')}}" class="btn btn-blue-light login mb-2 d-block">تسجيل دخول</a>
                <a href="" class="btn btn-pink login mb-2 d-block">مهتم وترغب المزيد من المعلومات</a>
            </div>
        </nav>
    </div>
</aside>
<div class="side-overlay"></div>
<!-- Side Menu -->
<div class="header-wrapper sticky-top">
<header id="header" class="main-header wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <button type="button" class="navbar-toggler btn btn-outline-light " id="openMenu">
                <i class="fa fa-align-right fa-fw"></i>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('web/images/logo.png')}}" class="img-fluid d-none d-lg-inline">
                <img src="{{asset('web/images/white-logo.png')}}" class="img-fluid d-lg-none d-xl-none">
            </a>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="navbar-nav mr-2 main-menu">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">عن بارتايم</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">اتصل بنا</a>
                    </li>
                </ul>
                <div class="auth-action ml-auto">
                    <a href="https://partime.typeform.com/to/uHkTAY" target="__blank" class="btn btn-deep-blue new-user ml-md-2">مستخدم جديد</a>
                    <a href="{{url('login')}}" class="btn btn-blue-light login">تسجيل دخول</a>
                </div>
            </div>
        </nav>
    </div>
</header><!-- /header -->

</div>
@yield('guest')


<footer id="footer" class="main-footer">
    <div class="container">
        <div class="top">
            <div class="row align-items-center">
                <div class="col-lg-4  col-md-6">
                    <div class="w-about">
                        <div class="f-logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('web/images/footer-logo.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                        <p><i class="fas fa-map-marker-alt"></i> مركز منشأت - واجهة الرياض - مجمع  ريادة الأعمال  الرياض - المملكة العربية السعودية </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6">
                    <div class="w-apps">
                        <p>التطبيق  قريبا ًمتاح علي منصات</p>
                        <div class="apps-links">
                            <a href="" onclick="return false;" target="_blank" title="">
                                <img src="{{asset('web/images/icon-google.png')}}" alt="">
                            </a>
                            <a href="" onclick="return false;" target="_blank" title="">
                                <img src="{{asset('web/images/icon-apple.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="social text-center">
                        <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
                    </div>
                    <div class="f-links">
                        <a href="">سياسية الخصوصية</a>
                        <a href="">شروط والأحكام</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom d-flex justify-content-between">
            <p class="copyright">جميع الحقوق الحقوق محفوظة لصالح تطبيق بارتايم</p>
            <a href="" class="site">www.par-time.com</a>
        </div>
        <a href="" class="scrollToTop">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
</footer>
<!-- /footer -->

<script src="{{asset('web/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('web/js/popper.min.js')}}"></script>
<script src="{{asset('web/js/wow.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>

<script src="{{asset('web/plugins/owlslider/owl.carousel.min.js')}}"></script>
<script src="{{asset('web/js/main.js')}}"></script>

      <!-- App scripts -->
        @stack('scripts')


<script type="text/javascript">
    $('.projects_slider').owlCarousel({
        // center: true,
        items: 4,
        loop: true,
        rtl: true,
        nav:false,
        navText: ["<i class='fas fa-arrow-right' title='السابق'></i>","<i class='fas fa-arrow-left' title='التالي'></i>"],
        dots:false,
        autoplay: true,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:10,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1.25,
                center: true,
            },
            // breakpoint from 480 up
            480 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:3,
            },
            // breakpoint from 768 up
            992 : {
                items:4,
            }
        }
    });
    $('.team_slider').owlCarousel({
        // center: true,
        items: 4,
        loop: true,
        rtl: true,
        nav:false,
        navText: ["<i class='fas fa-arrow-right' title='السابق'></i>","<i class='fas fa-arrow-left' title='التالي'></i>"],
        dots:false,
        autoplay: true,
        navSpeed: 2000,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin:10,
        smartSpeed:450,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items:1.25,
                center: true,
            },
            // breakpoint from 480 up
            480 : {
                items:2,
            },
            // breakpoint from 768 up
            768 : {
                items:3,
            },
            // breakpoint from 768 up
            992 : {
                items:4,
            }
        }
    });

    $(document).ready(function () {
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

</script>
</body>
</html>
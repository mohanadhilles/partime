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

    <link rel="stylesheet" type="text/css" href="web/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="web/css/animate.css">
    <link rel="stylesheet" type="text/css" href="web/fontawesome5.10.2/css/all.css">
    <!-- <link rel="stylesheet" type="text/css" href="web/css/jquery.fancybox.min.css"> -->
    <link rel="stylesheet" type="text/css" href="web/plugins/owlslider/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="web/css/style.css">
    <link rel="shortcut icon" href="web//images/logo.png" type="image/x-icon">
    <link rel="icon" href="web//images/logo.png" type="image/x-icon">


    <title>Par Time</title>
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
            </ul>
            <div class="btns">
                <a href="{{url('login')}}" class="btn btn-deep-blue new-user mb-2 d-block">مستخدم جديد</a>
                <a href="{{url('register')}}" class="btn btn-blue-light login mb-2 d-block">تسجيل دخول</a>
            </div>
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
                <img src="web/images/logo.png" class="img-fluid d-none d-lg-inline">
                <img src="web/images/white-logo.png" class="img-fluid d-lg-none d-xl-none">
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
                </ul>
                <div class="auth-action ml-auto">
                    <a href="{{url('login')}}" class="btn btn-deep-blue new-user ml-md-2">مستخدم جديد</a>
                    <a href="{{url('register')}}" class="btn btn-blue-light login">تسجيل دخول</a>
                </div>
            </div>
        </nav>
    </div>
</header><!-- /header -->

<!-- main-hero-section -->
<section class="main-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-last">
                <div class="details">
                    <div class="join-us d-none d-lg-block wow fadeInUp" data-wow-duration="1.5s"
                         data-wow-delay=".3s">
                        <div class="row no-gutters mb-3 align-items-center">
                            <div class="col-3">
                                <img src="web/images/statistices.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-9 pr-3">
                                <h3>مرحلة بارتايم الاستثمارية</h3>
                                <h4>seed funding round</h4>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="web/" class="btn btn-deep-blue">انضم كمستثمر لرحلتنا العالمية </a>
                        </div>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">تواجهك صعوبة بتوظيف
                        المهنيين المحترفين ؟</h2>
                    <h1 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">بارتايم هو الحل</h1>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="video-wraper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <video class="" autoplay="autoplay" loop="loop" height="auto" width="100%" muted playsinline>
                        <source src="web/media/video.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="h-apps-links  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <p>Soon</p>
                    <a href="web/#" onclick="return false;" target="_blank">
                        <img src="web/images/icon-google.png" class="img-fluid" alt="">
                    </a>
                    <a href="web/#" onclick="return false;" target="_blank">
                        <img src="web/images/icon-apple.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- display on tablet and mobile -->
        <div class="details mt-5 d-lg-none d-xl-none">
            <div class="join-us wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <div class="row no-gutters mb-3 align-items-center">
                    <div class="col-3">
                        <img src="web/images/statistices.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-9 pr-3">
                        <h3>مرحلة بارتايم الاستثمارية</h3>
                        <h4>Seed Funding round</h4>
                    </div>
                </div>
                <div class="text-center">
                    <a href="web/" class="btn btn-deep-blue">انضم كمستثمر لرحلتنا العالمية </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /main-hero-section -->

<!-- recruitment-solutions -->
<section class="recruitment-solutions">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span> نقدم حلول توظيف بارتايم </span></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="img wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <img src="web/images/recruitment-solutions.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-8">
                <div class="info mt-3">
                    <div class="content  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <p>منصة بارتايم ربط المنشآت مع المهنيين الباحثين عن العمل الجزئي والمرن لزيادة الانتاجية
                            والدخل ورفع مستوى الامتثال والشفافية</p>
                    </div>
                    <div class="actions wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <a href="web/" class="btn btn-pink ml-md-2">للباحثين عن فرص عمل</a>
                        <a href="web/" class="btn btn-blue-light">للمنشأت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /recruitment-solutions -->

<!-- features for companies -->
<section class="features-section">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span>للمنشآت</span></h2>
        </div>
        <div class="main-features-img text-center py-3 my-5  wow fadeInUp" data-wow-duration="1.5s"
             data-wow-delay=".3s">
            <img src="web/images/companies-feautres-image.png" class="img-fluid" alt="">
        </div>
        <div class="features-list">
            <div class="row">
                <div class="col-sm-4">
                    <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="img">
                            <img src="web/images/company-feature-1.png" class="img-fluid mx-auto" alt="">
                        </div>
                        <h3>نسهل لك العثور على مرشحين رائعين للعمل</h3>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="img">
                            <img src="web/images/company-feature-2.png" class="img-fluid mx-auto" alt="">
                        </div>
                        <h3>نوفر وقتك بتوحيد وسيلة التواصل مع المرشحين عبر المنصة</h3>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="img">
                            <img src="web/images/company-feature-3.png" class="img-fluid mx-auto" alt="">
                        </div>
                        <h3>نقلل المدة الزمنية لاختيار المرشح المثالي للوظيفة</h3>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section><!-- /features-section -->

<!-- features for employee -->
<section class="features-section">
    <div class="container">
        <div class="section-title  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span>للباحث عن عمل</span></h2>
        </div>
        <div class="main-features-img text-center py-3 my-5 wow fadeInUp" data-wow-duration="1.5s"
             data-wow-delay=".3s">
            <img src="web/images/employees-feautres-image.png" class="img-fluid mx-auto" alt="">
        </div>
        <div class="features-list">
            <div class="row">
                <div class="col-sm-4">
                    <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="img">
                            <img src="web/images/employee-feature-1.png" class="img-fluid mx-auto" alt="">
                        </div>
                        <h3>إٍستغل خبراتك ومواهبك في المكان والوقت المناسب لك</h3>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <div class="img">
                            <img src="web/images/employee-feature-2.png" class="img-fluid mx-auto" alt="">
                        </div>
                        <h3>بسهولة أنشئ سيرتك الذاتية واظهر بشكل احترافي</h3>
                    </article>
                </div>
                <div class="col-sm-4">
                    <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                        <div class="img">
                            <img src="web/images/employee-feature-3.png" class="img-fluid mx-auto" alt="">
                        </div>
                        <h3>بضغطة وحدة قدّم على وظائف</h3>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section><!-- /features-section -->

<!-- our-projects-section -->
<section class="our-projects-section">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span>مشاريع نوظف حاليا بها</span></h2>
            <p>شاهد أماكن العمل وسجل في المكان الذي تود العمل به</p>
        </div>
    </div>
    <div class="projects_slider owl-carousel">
        <div class="item">
            <div class="project-item">
                <img src="web/images/projects/1.png" class="img-fluid" alt="">
                <div class="overlay d-flex justify-content-center flex-column">
                    <h3 class="title">اسم المجمع هنا </h3>
                    <p class="city">الرياض</p>
                    <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                    <div class="links">
                        <a href="web/" class="btn btn-pink btn-sm">وظف بارتايم</a>
                        <a href="web/" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="project-item">
                <img src="web/images/projects/2.png" class="img-fluid" alt="">
                <div class="overlay d-flex justify-content-center flex-column">
                    <h3 class="title">اسم المجمع هنا </h3>
                    <p class="city">الرياض</p>
                    <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                    <div class="links">
                        <a href="web/" class="btn btn-pink btn-sm">وظف بارتايم</a>
                        <a href="web/" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="project-item">
                <img src="web/images/projects/3.png" class="img-fluid" alt="">
                <div class="overlay d-flex justify-content-center flex-column">
                    <h3 class="title">اسم المجمع هنا </h3>
                    <p class="city">الرياض</p>
                    <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                    <div class="links">
                        <a href="web/" class="btn btn-pink btn-sm">وظف بارتايم</a>
                        <a href="web/" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="project-item">
                <img src="web/images/projects/4.png" class="img-fluid" alt="">
                <div class="overlay d-flex justify-content-center flex-column">
                    <h3 class="title">اسم المجمع هنا </h3>
                    <p class="city">الرياض</p>
                    <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                    <div class="links">
                        <a href="web/" class="btn btn-pink btn-sm">وظف بارتايم</a>
                        <a href="web/" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /our-projects-section -->

<!-- experiences-section -->
<section class="experiences-section">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span>موظفينا خبرات بأهم الشركات العالمية</span></h2>
        </div>
        <div class="experiences-list">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a href="web/">
                        <img src="web/images/experiences/200px-Almarai_Corporate_Logo.svg.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a href="web/">
                        <img src="web/images/experiences/26-3-209_0_54_05_GomhuriaOnline_553590445.png"
                             class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a href="web/">
                        <img src="web/images/experiences/Deloitte-Logo.jpg" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a href="web/">
                        <img src="web/images/experiences/image.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/kisspng-logo-mcdonalds-sign-clip-art-im-lovin-it-mcdonalds-lgog-www-galleryhip-com-the-hippest-pi-5c77ae67b98cb9.992423635534730376.jpg"
                             class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/kisspng-logo-uber-brand-logo-uber-5b5c5cc0fb550.888960253277972990.jpg"
                             class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/kisspng-marriott-international-hotel-logo-starwood-courtya-hotel-5ac5572d32f243.775989665228823492087.jpg"
                             class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/noon.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/star.jpg" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/Zain_logo_logotype.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/شركة-كريم.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a>
                        <img src="web/images/experiences/هنقرستيشين-780x405.png" class="img-fluid" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!-- /experiences-section -->

<!-- our-team-section -->
<section class="our-team-section">
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span> فريقنا</span></h2>
        </div>
    </div>
    <div class="team_slider owl-carousel wow fadeInUp mt-5" data-wow-duration="1.5s" data-wow-delay=".3s">
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/walled.png" class="img-fluid" alt="">
                </div>
                <h3>Waleed Alhazmi</h3>
                <p>Founder</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/alaa.png" class="img-fluid" alt="">
                </div>
                <h3>Aladdin Faisal</h3>
                <p>Operation</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/mohanad.png" class="img-fluid" alt="">
                </div>
                <h3>Mohanad Hilles</h3>
                <p>IT technology</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/hanady.png" class="img-fluid" alt="">
                </div>
                <h3>Hanady Al Saqqa</h3>
                <p>Compliance</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>


        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/women.png" class="img-fluid" alt="">
                </div>
                <h3>Rahaf Al Amri</h3>
                <p>Finance</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/hani.png" class="img-fluid" alt="">
                </div>
                <h3>Hani yousif</h3>
                <p>IT technology</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/abeer.png" class="img-fluid" alt="">
                </div>
                <h3>Abeer Abu Zarifa</h3>
                <p>Customer Care</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/women.png" class="img-fluid" alt="">
                </div>
                <h3>Fitoon Alshayie</h3>
                <p>Marketing</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/suzan.png" class="img-fluid" alt="">
                </div>
                <h3>Suzan Salem</h3>
                <p>Social media</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/ramy.png" class="img-fluid" alt="">
                </div>
                <h3>Ramy Al-shair</h3>
                <p>UXUI Design</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="team-item">
                <div class="img">
                    <img src="web/images/team/women.png" class="img-fluid" alt="">
                </div>
                <h3>NEMAH NASER </h3>
                <p>Talent Acquisition</p>
                <div class="social-team  text-center">
                    <a href="web/#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>



    </div>
</section><!-- /our-team-section -->
<a href="web/#" class="scrollToTop"><i class="fas fa-arrow-up fa-2x"></i></a>

<footer id="footer" class="main-footer">
    <div class="container">
        <div class="top">
            <div class="row align-items-center">
                <div class="col-lg-4  col-md-6">
                    <div class="w-about">
                        <div class="f-logo">
                            <a href="web/">
                                <img src="web/images/footer-logo.png" class="img-fluid" alt="">
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
                                <img src="web/images/icon-google.png" alt="">
                            </a>
                            <a href="web/" onclick="return false;" target="_blank" title="">
                                <img src="web/images/icon-apple.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="social text-center">
                        <!-- <a href="web/" target="_blank"><i class="fab fa-facebook-f"></i></a> -->
                        <a href="web/https://twitter.com/par_time_app?s=09" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                        <a href="web/https://www.linkedin.com/company/part-time-app" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        <a href="web/http://instagram.com/par_time_app" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        <a href="web/https://www.snapchat.com/add/parttime_app" target="_blank"><i
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
<script src="web/js/jquery-3.4.1.min.js"></script>
<script src="web/js/popper.min.js"></script>
<script src="web/js/wow.min.js"></script>
<script src="web/js/bootstrap.min.js"></script>

<script src="web/plugins/owlslider/owl.carousel.min.js"></script>
<!-- <script src="web/plugins/owlslider/owl.carousel.min.js"></script> -->
<!-- <script src="web/plugins/fancybox/jquery.fancybox.min.js"></script> -->
<script src="web/js/main.js"></script>
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

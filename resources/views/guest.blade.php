@extends('layouts.webapp')
@section('guest')
<style>
    .available_jobs_section::before{ background-image: url("{{asset('images/jobs_bg.png')}}");}
</style>
    <!-- main-hero-section -->
    <section class="main-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last">
                    <div class="details">
                        <div class="join-us d-none d-lg-block wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="row no-gutters mb-3 align-items-center">
                                <div class="col-3">
                                    <img src="web/images/statistices.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-9 pr-3">
                                    <h3>مرحلة بارتايم الاستثمارية</h3>
                                    <h4>Seed Funding Round</h4>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="https://partime.typeform.com/to/Au1uWK"  target="_blank" class="btn btn-deep-blue">انضم كمستثمر لرحلتنا العالمية </a>
                            </div>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">تواجهك صعوبة بالتوظيف بنظام العمل المرن ؟</h2>
                        <h1 class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s"># بارتايم هو الحل</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="video-wraper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <video class=""  autoplay="autoplay" loop="loop"  height="auto" width="100%" muted playsinline>
                            <source src="web/media/video.mp4" type="video/mp4" />
                        </video>
                    </div>
                    <div class="h-apps-links  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <p>Soon</p>
                        <a href="#" onclick="return false;" target="_blank">
                            <img src="web/images/icon-google.png" class="img-fluid" alt="">
                        </a>
                        <a href="#" onclick="return false;"  target="_blank">
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
                            <h4>Seed Funding Round</h4>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="https://partime.typeform.com/to/Au1uWK"  target="_blank" class="btn btn-deep-blue">انضم كمستثمر لرحلتنا العالمية </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /main-hero-section -->

    <!-- recruitment-solutions -->
    <section class="recruitment-solutions">
        <div class="container">
            <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <h2><span>نقدم حلول توظيف بارتايم</span></h2>
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
                            <p>منصة بارتايم ربط المنشآت مع المهنيين الباحثين عن العمل الجزئي والمرن لزيادة الإنتاجية والدخل ورفع مستوى الإمتثال والشفافية.</p>
                        </div>
                        <div class="actions wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                            <a href="https://partime.typeform.com/to/iT9Im4" target="_blank" class="btn btn-pink ml-md-2">للباحثين عن فرص عمل بارتايم</a>
                            <a href="https://partime.typeform.com/to/uHkTAY" target="_blank" class="btn btn-blue-light">المنشآت</a>
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
            <div class="main-features-img text-center py-3 my-5  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="web/images/companies-feautres-image.png" class="img-fluid" alt="">
            </div>
            <div class="features-list">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="img">
                                <img src="web/images/company-feature-1.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <h3>ابحث عن بارتايمرز مؤهلين بضغطة زر.</h3>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="img">
                                <img src="web/images/company-feature-2.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <h3>  نظام إدارة الرواتب عبر المنصة.</h3>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                            <div class="img">
                                <img src="web/images/company-feature-3.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <h3>فريق متخصص من المستشارين لتحصل على توظيف أسرع وأكثر نجاحًا</h3>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /features-section -->

    <!-- available jobs now -->
    <div class="container">
        <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
            <h2><span>مهن المرشحين البارتايم المتاحين</span></h2>
            <p>لعرض الوظائف قم بتحديد  الدولة والمدينة التي ترغب بالتوظيف بها او تبحث عن وظيفة بها</p>
        </div>
    </div>
    <section class="available_jobs_section">
        <div class="container">
            <div class="h_available_job_search">
                <div class="search_wrap">
                    <form>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="cs-select" title="تحديد الدولة" >
                                    <select class="form-control" placeholder="تحديد الدولة">
                                        <option hidden>تحديد الدولة</option>
                                        <option disabled="disabled">تحديد الدولة</option>
                                        <option value="">السعودية</option>

                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="cs-select" title="تحديد المدينة" >
                                    <select class="form-control" placeholder="تحديد المدينة">
                                        <option hidden>تحديد المدينة</option>
                                        <option disabled="disabled">تحديد المدينة</option>
                                        <option value="">الرياض </option>
                                        <option value="">جدة</option>
                                        <option value="">مكة المكرمة</option>
                                        <option value=""> المدينة المنورة</option>
                                        <option value="">ينبع</option>
                                        <option value="">الدمام</option>
                                        <option value="">الخبر</option>
                                        <option value="">الجبيل</option>
                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>

                              <div class="col-sm-3">
                                <div class="cs-select" title="تحديد مستوي المرشحين">
                                    <select class="form-control" placeholder="تحديد مستوي المرشحين">
                                        <option hidden>تحديد مستوي المرشحين</option>
                                        <option disabled="disabled">تحديد مستوي المرشحين</option>
                                        <option value="">White-collar workers </option>
                                        <option value="">Blue-collar workers</option>
                                        <option value="">Pink-collar workers </option>

                                    </select>
                                    <i class="fas fa-angle-down"></i>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <a href="{{url('guest/jobs')}}" class="btn btn-block btn-blue-light">عرض</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="available_jobs_list">
                <div class="row justify-content-md-center">

                     @include('includes.functional_areas')

                </div>
            </div>
        </div>
    </section>
    <div class="text-center view-jobs-btn">
        <a href="{{url('guest/jobs')}}" class="btn btn-pink">عرض جميع المهن <i class="fas fa-angle-double-left"></i></a>
    </div>
    <!-- features for employee -->

    <!-- features for employee -->
    <section class="features-section">
        <div class="container">
            <div class="section-title  wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <h2><span>للمهنين الباحثين عن عمل بارتايم</span></h2>
            </div>
            <div class="main-features-img text-center py-3 my-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="web/images/employees-feautres-image.png" class="img-fluid mx-auto" alt="">
            </div>
            <div class="features-list">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="img">
                                <img src="web/images/employee-feature-1.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <h3>فرص وظيفية تناسب خبراتك المهنية.</h3>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="img">
                                <img src="web/images/employee-feature-2.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <h3>طوّر خبراتك، وزد من دخلك في أكثر من وظيفة.</h3>
                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="feature wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                            <div class="img">
                                <img src="web/images/employee-feature-3.png" class="img-fluid mx-auto" alt="">
                            </div>
                            <h3>فرص وظيفية قريبة منك</h3>
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
                        <h3 class="title">برج المملكة</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY" tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4"  tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/2.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">البوابة الاقتصادية</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY" tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/3.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">برج العنود</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY" tareget="_blank"  class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/4.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">برج الفصيلة</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY" tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/5.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">واجهة الرياض</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY"  tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/6.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">مدينة الملك عبدالله المالية</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY"  tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/7.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">برج حمد</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY" tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="project-item">
                    <img src="web/images/projects/8.png" class="img-fluid" alt="">
                    <div class="overlay d-flex justify-content-center flex-column">
                        <h3 class="title">برج المجدول</h3>
                        <p class="city">الرياض</p>
                        <p class="content">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </p>
                        <div class="links">
                            <a href="https://partime.typeform.com/to/uHkTAY"  tareget="_blank" class="btn btn-pink btn-sm">وظف بارتايم</a>
                            <a href="https://partime.typeform.com/to/iT9Im4" tareget="_blank" class="btn btn-blue-light btn-sm">انضم بارتايم</a>
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
                <p class="top_subheader">+1000</p>
                <h2><span>مرشحينا خبرات بأهم الشركات العالمية</span></h2>
            </div>
            <div class="experiences-list">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/5.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/7.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/8.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/9.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/10.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="experience wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <a href="">
                            <img src="web/images/experiences/11.png" class="img-fluid" alt="">
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
                <h2><span>فريقنا</span></h2>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="team-item">
                    <div class="img">
                        <img src="web/images/team/mohanad.png" class="img-fluid" alt="">
                    </div>
                    <h3>Mohanad Hilles</h3>
                    <p>IT Technology</p>
                    <div class="social-team  text-center">
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="team-item">
                    <div class="img">
                        <img src="web/images/team/ramy.png" class="img-fluid" alt="">
                    </div>
                    <h3>Ramy Alshaer</h3>
                    <p>UXUI Design</p>
                    <div class="social-team  text-center">
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
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
                        <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /our-team-section -->

@stop
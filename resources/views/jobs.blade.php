@extends('layouts.webapp')
@section('guest')
    <div class="page-bar sticky-top1">
        <div class="container">
            <div class="page-bar-wrap d-flex justify-content-between align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.998" height="21" viewBox="0 0 20.998 21">
                                <path id="home" d="M20.934,9.133l0,0L12.366.566a1.933,1.933,0,0,0-2.734,0L1.07,9.127l-.009.009A1.932,1.932,0,0,0,2.348,12.43l.06,0h.341v6.3A2.265,2.265,0,0,0,5.011,21H8.363a.615.615,0,0,0,.615-.615V15.442a1.034,1.034,0,0,1,1.032-1.032h1.977a1.033,1.033,0,0,1,1.032,1.032v4.942a.615.615,0,0,0,.615.615h3.351a2.265,2.265,0,0,0,2.263-2.263v-6.3h.317a1.934,1.934,0,0,0,1.368-3.3ZM20.063,11a.7.7,0,0,1-.5.206h-.932a.615.615,0,0,0-.615.615v6.919a1.033,1.033,0,0,1-1.032,1.032H14.25V15.442a2.265,2.265,0,0,0-2.263-2.263H10.011a2.265,2.265,0,0,0-2.263,2.263v4.327H5.011a1.033,1.033,0,0,1-1.032-1.032V11.818a.615.615,0,0,0-.615-.615H2.419A.7.7,0,0,1,1.935,10h0L10.5,1.436a.7.7,0,0,1,.994,0L20.06,10l0,0a.7.7,0,0,1,0,.993Zm0,0" transform="translate(-0.5 0.001)" />
                            </svg>
                            الرئيسية
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">مهن المرشحين البارتايم المتاحين</li>
                </ol>
                <div class="page-toolbar">
                    <div class="available_job_search">
                        <div class="search_wrap">
                            <form>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="cs-select">
                                            <select class="form-control" placeholder="تحديد الدولة">
                                                <option hidden>تحديد الدولة</option>
                                                <option value="">السعودية</option>
                                             </select>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="cs-select">
                                            <select class="form-control" placeholder="تحديد المدينة">
                                                <option اhidden>تحديد المدينة</option>
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
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-block btn-pink">عرض</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content available-jobs-page">
        <!-- available jobs now -->
        <div class="container">
            <div class="section-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <h2><span>مهن المرشحين البارتايم المتاحين</span></h2>
            </div>

            <div class="available_jobs_list">
                <div class="row justify-content-md-center">

                   @forelse($functional_areas as $functional_area)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="front">
                                <div class="job_count d-flex justify-content-center align-items-center flex-column">
                                    <span>{{ $functional_area->count_jobs  }}</span>
                                    <p>مرشح بارتايم</p>
                                    <br><br>
                                   <p> {{ $functional_area->range_price_from  }} - {{ $functional_area->range_price_to  }}    ريال سعودي </p>

                                </div>
                                <div class="title d-flex justify-content-center align-items-center">
                                    <h3>{{ $functional_area->functional_area  }}</h3>

                                </div>
                            </div>
                            <div class="overlay d-flex justify-content-center align-items-center flex-column">
                                <a href="" class="btn btn-pink w-100 mb-2">وظف بارتايم</a>
                                <a href="" class="btn btn-blue-light w-100">أنضم بارتايم</a>
                            </div>
                        </div>
                    </div>

                                @empty

   <center>      لا يوجد بيانات      </center>


@endforelse
                </div>
              <nav aria-label="Page navigation" class="mt-4">
                 <div class="row justify-content-center">

                    {{ $functional_areas->links() }}
                    </div>

                </nav>
            </div>
        </div>
    </div>
@stop


  @forelse($functional_areas as $functional_area)

      <!--Job start-->
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="available_job_item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="front">
                                <div class="job_count d-flex justify-content-center align-items-center flex-column"
                                     style='background: url("{{asset('images/job_bg.png')}}") '>
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

              <div class="col-sm-6 col-lg-3">
                     <a style="text-decoration: none" href="{{route('posted.jobs',['job_status_id'=> 1])}}" >
                        <div class="card card-inverse card-primary">
                            <div class="card-block">
                                <div class="h1 text-muted text-xs-right m-b-2">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <div class="h4 m-b-0">{{__('Pending Contracts')}} </div>
                                <small class="text-muted text-uppercase font-weight-bold">{{Auth::guard('company')->user()->countPendingContracts()}}</small>
                             </div>
                        </div>
                        </a>
                    </div>


                  <div class="col-sm-6 col-lg-3">
                     <a style="text-decoration: none" href="{{route('posted.jobs',['job_status_id'=> 2])}}" >
                        <div class="card card-inverse card-success">
                            <div class="card-block">
                                <div class="h1 text-muted text-xs-right m-b-2">
                                    <i class="fa fa-file-text"></i>
                                </div>
                                <div class="h4 m-b-0">{{__('Waiting For Selection')}} </div>
                                <small class="text-muted text-uppercase font-weight-bold">{{Auth::guard('company')->user()->countWaitingForSelection()}}</small>
                             </div>
                        </div>
                        </a>
                    </div>



                  <div class="col-sm-6 col-lg-3">
                     <a style="text-decoration: none" href="{{route('company.my.payments')}}" >
                        <div class="card card-inverse card-info">
                            <div class="card-block">
                                <div class="h1 text-muted text-xs-right m-b-2">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="h4 m-b-0">{{__('Pending Payments')}} </div>
                                <small class="text-muted text-uppercase font-weight-bold">{{Auth::guard('company')->user()->countPendingPayments()}}</small>
                             </div>
                        </div>
                        </a>
                    </div>





                  <div class="col-sm-6 col-lg-3">
                     <a style="text-decoration: none" href="{{route('company.my.contracts')}}" >
                        <div class="card card-inverse card-danger">
                            <div class="card-block">
                                <div class="h1 text-muted text-xs-right m-b-2">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="h4 m-b-0">{{__('Expired Contract')}} </div>
                                <small class="text-muted text-uppercase font-weight-bold">{{Auth::guard('company')->user()->countExpiredContract()}}</small>
                             </div>
                        </div>
                        </a>
                    </div>



                 <div class="col-sm-6 col-lg-3">
                     <a style="text-decoration: none" href="{{route('company.my.contracts')}}" >
                        <div class="card card-inverse card-warning">
                            <div class="card-block">
                                <div class="h1 text-muted text-xs-right m-b-2">
                                    <i class="fa fa-file"></i>
                                </div>
                                <div class="h4 m-b-0">{{__('Near to Expire')}} </div>
                                <small class="text-muted text-uppercase font-weight-bold">{{Auth::guard('company')->user()->countNeartoExpire()}}</small>
                             </div>
                        </div>
                        </a>
                    </div>




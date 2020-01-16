<ul class="row profilestat">


             <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user" aria-hidden="true"></i>
              <h6><a href="{{route('company.profile')}}">%  {{Auth::guard('company')->user()->calculate_profile()}} </a></h6>
              <strong>{{__('Profile Completion')}}</strong> </div>
          </li>



          <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <h6><a href="{{route('posted.jobs',['job_status_id'=> 1])}}">{{Auth::guard('company')->user()->countPendingContracts()}}</a></h6>
              <strong>{{__('Pending Contracts')}}</strong> </div>
          </li>


          <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <h6><a href="{{route('posted.jobs',['job_status_id'=> 2])}}">{{Auth::guard('company')->user()->countWaitingForSelection()}}</a></h6>
              <strong>{{__('Waiting For Selection')}}</strong> </div>
          </li>


                    <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-money" aria-hidden="true"></i>
              <h6><a href="{{route('posted.jobs')}}">{{Auth::guard('company')->user()->countPendingPayments()}}</a></h6>
              <strong>{{__('Pending Payments')}}</strong> </div>
          </li>


                    <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-file" aria-hidden="true"></i>
              <h6><a href="{{route('posted.jobs')}}">{{Auth::guard('company')->user()->countExpiredContract()}}</a></h6>
              <strong>{{__('Expired Contract')}}</strong> </div>
          </li>


                    <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-file" aria-hidden="true"></i>
              <h6><a href="{{route('posted.jobs')}}">{{Auth::guard('company')->user()->countNeartoExpire()}}</a></h6>
              <strong>{{__('Near to Expire')}}</strong> </div>
          </li>


                      <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h6><a class="btn btn-info" href="{{route('company.new.contract')}}">{{__('New Contract')}}</a></h6>
                </div>
          </li>



                       <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-ticket" aria-hidden="true"></i>
              <h6><a class="btn btn-info" href="{{route('company.new.ticket')}}">{{__('New Ticket')}}</a></h6>
                </div>
          </li>

                         <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-plus" aria-hidden="true"></i>
              <h6><a class="btn btn-info" href="{{route('post.job')}}">{{__('New Post Job')}}</a></h6>
               </div>
          </li>

     <!--     <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true"></i>
              <h6><a href="{{route('company.followers')}}">{{Auth::guard('company')->user()->countFollowers()}}</a></h6>
              <strong>{{__('Followers')}}</strong> </div>
          </li>
          <li class="col-md-2 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <h6><a href="{{route('company.messages')}}">{{Auth::guard('company')->user()->countCompanyMessages()}}</a></h6>
              <strong>{{__('Messages')}}</strong> </div>
          </li>-->
        </ul>
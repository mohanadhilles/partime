<ul class="row profilestat">
          <li class="col-md-4 col-sm-4 col-xs-6">
            <a href="{{route('my.profile')}}"> <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true"></i>
               <strong>{{__('Profile Completion')}}  %  {{Auth::user()->calculate_profile()}}</strong>
               </div>
                </a>
          </li>
           <li class="col-md-4 col-sm-4 col-xs-6">
            <a href="{{route('my.bank.accounts')}}"> <div class="inbox"> <i class="fa fa-bank" aria-hidden="true"></i>

              <strong>{{__('My Bank Accounts')}}</strong> </div> </a>
          </li>

           <li class="col-md-4 col-sm-4 col-xs-6">
            <a href="{{route('my.offers')}}"> <div class="inbox"> <i class="fa fa-get-pocket" aria-hidden="true"></i>

              <strong>{{__('Part Time job applications')}}</strong> </div> </a>
          </li>

           <li class="col-md-4 col-sm-4 col-xs-6">
           <a href="{{route('my.contracts')}}"> <div class="inbox"> <i class="fa fa-file" aria-hidden="true"></i>

              <strong>{{__('My Contracts')}}</strong> </div>  </a>
          </li>

           <li class="col-md-4 col-sm-4 col-xs-6">
           <a href="{{route('my.payrolls')}}"> <div class="inbox"> <i class="fa fa-money" aria-hidden="true"></i>

              <strong>{{__('My Payroll')}}</strong> </div>   </a>
          </li>
            <li class="col-md-4 col-sm-4 col-xs-6">
           <a href="{{route('my.documents')}}"> <div class="inbox"> <i class="fa fa-file-word-o" aria-hidden="true"></i>

              <strong>{{__('Documents')}}</strong> </div>   </a>
          </li>





                <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-ticket" aria-hidden="true"></i>
              <h6><a class="btn btn-info" href="{{route('my.new.ticket')}}">{{__('New Ticket')}}</a></h6>
                </div>
          </li>

                         <li class="col-md-4 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-plus" aria-hidden="true"></i>
              <h6><a class="btn btn-info" href="{{route('new.job.application')}}">{{__('New Job Application')}}</a></h6>
               </div>
          </li>


  <!--        <li class="col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true"></i>
              <h6><a href="{{route('my.followings')}}">{{Auth::user()->countFollowings()}}</a></h6>
              <strong>{{__('Followings')}}</strong> </div>
          </li>
          <li class="col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-briefcase" aria-hidden="true"></i>
              <h6><a href="{{url('my-profile#cvs')}}">{{Auth::user()->countProfileCvs()}}</a></h6>
              <strong>{{__('My CV List')}}</strong> </div>
          </li>
          <li class="col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <h6><a href="{{route('my.messages')}}">{{Auth::user()->countApplicantMessages()}}</a></h6>
              <strong>{{__('Messages')}}</strong> </div>
          </li>-->
</ul>
<div class="col-md-3 col-sm-4">
        <ul class="usernavdash">
          <li class="active"><a href="{{route('company.home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a></li>


          <li><a href="{{ route('company.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a></li>
<!--          <li><a href="{{ route('company.detail', Auth::guard('company')->user()->slug) }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Public Profile')}}</a></li>
-->          <li><a href="{{ route('post.job') }}"><i class="fa fa-plus" aria-hidden="true"></i> {{__('New Post Job')}}</a></li>
          <li><a href="{{ route('posted.jobs') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{__('Company Jobs')}}</a></li>


          <li><a href="{{ route('company.my.employees') }}"><i class="fa fa-users" aria-hidden="true"></i> {{__('My Employee')}}</a></li>
          <li><a href="{{ route('company.my.contracts') }}"><i class="fa fa-file" aria-hidden="true"></i> {{__('My Contracts')}}</a></li>
          <li><a href="{{ route('company.my.payments') }}"><i class="fa fa-money" aria-hidden="true"></i> {{__('My Payments')}}</a></li>
          <li><a href="{{ route('company.my.tickets') }}"><i class="fa fa-ticket" aria-hidden="true"></i> {{__('My Tickets')}}</a></li>


          
<!--          <li><a href="{{route('company.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Company Messages')}}</a></li>
--><!--          <li><a href="{{route('company.followers')}}"><i class="fa fa-user-o" aria-hidden="true"></i> {{__('Company Followers')}}</a></li>
-->          <li><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a>
          <form id="logout-form" action="{{ route('company.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          </li>
        </ul>
        <div class="row">
      <!--<div class="col-md-12">{!! $siteSetting->dashboard_page_ad !!}</div>  -->
      </div>
      </div>
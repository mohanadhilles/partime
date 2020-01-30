   <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}" ><i class="icon-speedometer"></i> {{__('Dashboard')}}  </a></li>



		<li class="nav-item" ><a class="nav-link" href="{{ route('my.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('My Profile')}}</a>
		</li>

	  <!--	<li><a href="{{ route('view.public.profile', Auth::user()->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> {{__('View Public Profile')}}</a>
		</li>-->
         <li class="nav-item" ><a class="nav-link" href="{{ route('new.job.application') }}"><i class="fa fa-plus" aria-hidden="true"></i> {{__('New Job Application')}}</a></li>
         <li class="nav-item" ><a class="nav-link" href="{{ route('my.offers') }}"><i class="fa fa-get-pocket" aria-hidden="true"></i> {{__('Part Time job applications')}}</a></li>
         <li class="nav-item" ><a class="nav-link" href="{{ route('my.orders') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{__('My Orders')}}</a></li>
	  <!--	<li><a href="{{ route('my.job.applications') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('My Job Applications')}}</a></li> -->
	      <li  class="nav-item" ><a class="nav-link" href="{{ route('my.bank.accounts') }}"><i class="fa fa-bank" aria-hidden="true"></i> {{__('My Bank Accounts')}}</a></li>
          <li class="nav-item" ><a class="nav-link" href="{{ route('my.contracts') }}"><i class="fa fa-file" aria-hidden="true"></i> {{__('My Contracts')}}</a></li>
          <li class="nav-item" ><a class="nav-link" href="{{ route('my.payrolls') }}"><i class="fa fa-money" aria-hidden="true"></i> {{__('My Payroll')}}</a></li>
          <li class="nav-item" ><a class="nav-link" href="{{ route('my.tickets') }}"><i class="fa fa-ticket" aria-hidden="true"></i> {{__('My Tickets')}}</a></li>




	<!--	<li><a href="{{ route('my.favourite.jobs') }}"><i class="fa fa-heart" aria-hidden="true"></i> {{__('My Favourite Jobs')}}</a>
		</li>



		<li><a href="{{url('my-profile#cvs')}}"><i class="fa fa-file-text" aria-hidden="true"></i> {{__('Manage Resume')}}</a>
		</li>

		<li><a href="{{route('my.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('My Messages')}}</a>
		</li>

		<li><a href="{{route('my.followings')}}"><i class="fa fa-user-o" aria-hidden="true"></i> {{__('My Followings')}}</a>
		</li>-->




<!--          <li><a href="{{route('company.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Company Messages')}}</a></li>
--><!--          <li><a href="{{route('company.followers')}}"><i class="fa fa-user-o" aria-hidden="true"></i> {{__('Company Followers')}}</a></li>
-->          <li class="nav-item" ><a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
          </li>

            </ul>
        </nav>
    </div>



      <main class="main">


         <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="row">

      <!--


<div class="col-md-3 col-sm-4">

	<div class="switchbox">

		<div class="txtlbl">{{__('Immediate Available')}} <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('Are you immediate available')}}?" data-original-title="{{__('Are you immediate available')}}?" title="{{__('Are you immediate available')}}?"></i>
		</div>

		<div class="pull-right">

			<label class="switch switch-green"> @php

        $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';

        @endphp

        <input type="checkbox" name="is_immediate_available" id="is_immediate_available" class="switch-input" {{$checked}} onchange="changeImmediateAvailableStatus({{Auth::user()->id}}, {{Auth::user()->is_immediate_available}});">

        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span> </label>

		</div>

		<div class="clearfix"></div>

	</div>





</div>-->
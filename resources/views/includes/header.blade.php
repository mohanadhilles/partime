    <header class="navbar">
        <div class="container-fluid">
            <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
            <a class="navbar-brand" href="#"></a>
            <ul class="nav navbar-nav hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                </li>
            <!--
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{route('company.new.contract')}}">{{__('New Contract')}}</a>
                </li>-->
                  @if(Auth::check())
                     <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{route('my.new.ticket')}}">{{__('New Ticket')}}</a>
                </li>
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{route('new.job.application')}}">{{__('New Job Application')}}</a>
                </li>

                  @endif
   @if(Auth::guard('company')->check())
                   <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{route('company.new.ticket')}}">{{__('New Ticket')}}</a>
                </li>
                <li class="nav-item p-x-1">
                    <a class="nav-link" href="{{route('post.job')}}">{{__('New Post Job')}}</a>
                </li>
                @endif
            </ul>
            <ul class="nav navbar-nav pull-left hidden-md-down">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-bell"></i><span class="tag tag-pill tag-danger">5</span></a>
                </li>
             <!--   <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-list"></i></a>
                </li>-->
               <!-- <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
                </li>-->

                  @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="/admin_assets/no-image.png"  class="img-avatar" alt="{{ Auth::user()->name }}">
                        <span class="hidden-md-down">{{ Auth::user()->first_name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <!--  <div class="dropdown-header text-xs-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="tag tag-info">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="tag tag-success">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="tag tag-danger">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="tag tag-warning">42</span></a>
                        <div class="dropdown-header text-xs-center">
                            <strong>Settings</strong>
                        </div>-->
                             <a class="dropdown-item" href="{{route('home')}}" ><i class="fa fa-tachometer"></i>  {{__('Dashboard')}}</a>
                           <a class="dropdown-item" href="{{ route('my.profile') }}" ><i class="fa fa-user"></i> {{__('My Profile')}}</a>
                       <!-- <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>  -->
                <!--        <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="tag tag-primary">42</span></a>-->
                 <!--       <div class="divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>-->

                         <div class="divider"></div>
                        <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" ><i class="fa fa-lock"></i> {{__('Logout')}}</a>
                                         <form id="logout-form-header1" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                    </div>
                </li>
                     @endif


                  @if(Auth::guard('company')->check())
                            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="/admin_assets/no-image.png"  class="img-avatar" alt="{{ Auth::guard('company')->user()->name }}">
                        <span class="hidden-md-down">{{ Auth::guard('company')->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <!--  <div class="dropdown-header text-xs-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="tag tag-info">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="tag tag-success">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="tag tag-danger">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="tag tag-warning">42</span></a>
                        <div class="dropdown-header text-xs-center">
                            <strong>Settings</strong>
                        </div>-->
                             <a class="dropdown-item" href="{{route('company.home')}}" ><i class="fa fa-tachometer"></i>  {{__('Dashboard')}}</a>
                           <a class="dropdown-item" href="{{ route('company.profile') }}" ><i class="fa fa-user"></i> {{__('Company Profile')}}</a>
                       <!-- <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>  -->
                <!--        <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="tag tag-primary">42</span></a>-->
                 <!--       <div class="divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>-->

                         <div class="divider"></div>
                        <a class="dropdown-item"  href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" ><i class="fa fa-lock"></i> {{__('Logout')}}</a>
                                         <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                    </div>
                </li>
                     @endif

                <li class="nav-item">
                    <a class="nav-link navbar-toggler aside-toggle" href="#">&#9776;</a>
                </li>

            </ul>
        </div>
    </header>
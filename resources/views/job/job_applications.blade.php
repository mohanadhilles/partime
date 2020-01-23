@extends('layouts.app')

@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 

<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Job Applications')])
<!-- Inner Page Title end -->

<div class="listpgWraper">
  <div class="container">
  @include('flash::message')
    <div class="row">
      @include('includes.company_dashboard_menu')

      <div class="col-md-9 col-sm-8">
        <div class="myads">
          <h3>{{__('Job Applications')}} @if(isset($favourite)) - {{__('Job Applications favourite')}} @endif



          <small  class="pull-left" >
          @if(!isset($favourite))
            <a class="btn btn-info" href="{{route('list.favourite.applied.users', [$job_id])}}" title="{{__('List Short Listed Candidates')}}" >
                <i class="fa fa-lg fa-star"></i>{{__('List Short Listed Candidates')}}</a>
                @else
        <a class="btn btn-info" href="{{route('list.applied.users', [$job_id])}}" title="{{__('List Candidates')}}" ><i class="fa fa-users fa-lg"></i>{{__('List Candidates')}} </a>
        @endif
          </small>


          </h3>
          <ul class="searchList">
            <!-- job start -->
            @if(isset($job_applications) && count($job_applications))
            @foreach($job_applications as $job_application)
            @php
             $user = $job_application->getUser();
             $job = $job_application->getJob();
             $company = $job->getCompany();
             $profileCv = $job_application->getProfileCv();
            @endphp
            @if(null !== $job_application && null !== $user && null !== $job && null !== $company)
            <li>

            <div class="row">
              <div class="col-md-5 col-sm-5">
                <div class="jobimg">{{$user->printUserImage(100, 100)}}</div>
                <div class="jobinfo">
                  <h3>{{$user->getName()}}</h3>
                  <div class="location"> {{$user->getLocation()}}</div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-4 col-sm-4">
<!--                <div class="minsalary">{{$job_application->expected_salary}} {{$job_application->salary_currency}} <span>/ {{$job->getSalaryPeriod('salary_period')}}</span></div>
--><!--  -->

 <div class="minsalary"> خبرة : {{$job->getJobExperience('job_experience')}}   </div>
              </div>
              <div class="col-md-3 col-sm-3">
                  <div class=""><a class="btn btn-primary" target="_blank" href="{{  $user->linkedin_link }}">{{__('linkedin Link')}}
                  <i class="fa fa-linkedin"></i></a></div>
                     @if(isset($job) && isset($company))
      @if(Auth::guard('company')->check() && Auth::guard('company')->user()->isFavouriteApplicant($user->id, $job->id, $company->id))
      <a href="{{route('remove.from.favourite.applicant', [$job_application->id, $user->id, $job->id, $company->id])}}" class="btn"><i class="fa fa-remove" aria-hidden="true"></i> {{__('Short Listed Applicant')}} </a>
      @else
      <a href="{{route('add.to.favourite.applicant', [$job_application->id, $user->id, $job->id, $company->id])}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Short List This Applicant')}}</a>
      @endif
      @endif

             @if($job->job_status_id == 2)
               <div class=" "><a href="{{route('make.deal', [$job_application->id, $user->id, $job->id, $company->id])}}"
                class="btn btn-danger"   href="{{  $user->linkedin_link }}">{{__('Make Deal')}}
                  <i class="fa fa-file-text"></i></a></div>
              </div>

              @endif
                 <!-- Buttons -->


            </div>
            <p>{{str_limit($user->getProfileSummary('summary'),150,'...')}}</p>
          </li>
            <!-- job end -->
            @endif
            @endforeach
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
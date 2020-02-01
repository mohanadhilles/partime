
@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Job Applications')])
<!-- Inner Page Title end -->

        <div class="container">
  <div class="row"> @include('includes.company_dashboard_menu')
    <div class="col-md-10 col-sm-10">


                   @include('flash::message')
                <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> {{__('Job Applications')}} @if(isset($favourite)) - {{__('Job Applications favourite')}} @endif

                                 <small  class="pull-left" >
          @if(!isset($favourite))
            <a class="btn btn-info" href="{{route('list.favourite.applied.users', [$job_id])}}" title="{{__('List Short Listed Candidates')}}" >
                <i class="fa fa-lg fa-star"></i>{{__('List Short Listed Candidates')}}</a>
                @else
        <a class="btn btn-info" href="{{route('list.applied.users', [$job_id])}}" title="{{__('List Candidates')}}" ><i class="fa fa-users fa-lg"></i>{{__('List Candidates')}} </a>
        @endif
          </small>
                            </div>
                            <div class="card-block">
              <div class="table-responsive">











      <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم المرشح </th>
        <th class="text-right">صورة</th>
        <th class="text-right"> اسم المرشح</th>
        <th class="text-right"> العنوان    </th>


        <th class="text-right"> الخبرة   </th>
        <th class="text-right"> {{__('linkedin Link')}} </th>
        <th class="text-right"> المفضلة </th>

        <th class="text-right"   >خياراتي</th>
        </tr>
             @forelse($job_applications as $job_application)
                  @php
             $user = $job_application->getUser();
             $job = $job_application->getJob();
             $company = $job->getCompany();

            @endphp
            @if(null !== $job_application && null !== $user && null !== $job && null !== $company)
          <tr>
        <td>{{$job_application->id}}  </td>
        <td>{{$user->printUserImage(100, 100)}} </td>
        <td>{{$user->getName()}} </td>
        <td>{{$user->getLocation()}} </td>
<!--        <td>{{$job_application->salary_currency}}  </td>
        <td>{{$job_application->expected_salary}} </td>-->
        <td>{{$job->getJobExperience('job_experience')}}  </td>
        <td><a class="btn btn-primary" target="_blank" href="{{  $user->linkedin_link }}">{{__('linkedin Link')}}
                  <i class="fa fa-linkedin"></i></a>  </td>
                  <td>              @if(isset($job) && isset($company))
      @if(Auth::guard('company')->check() && Auth::guard('company')->user()->isFavouriteApplicant($user->id, $job->id, $company->id))
      <a href="{{route('remove.from.favourite.applicant', [$job_application->id, $user->id, $job->id, $company->id])}}" class="btn"><i class="fa fa-remove" aria-hidden="true"></i> {{__('Short Listed Applicant')}} </a>
      @else
      <a href="{{route('add.to.favourite.applicant', [$job_application->id, $user->id, $job->id, $company->id])}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Short List This Applicant')}}</a>
      @endif
      @endif</td>
                  <td>  @if($job->job_status_id == 2)
               <a href="{{route('make.deal', [$job_application->id, $user->id, $job->id, $company->id])}}"
                class="btn btn-danger"    >{{__('Make Deal')}}
                  <i class="fa fa-file-text"></i></a>


              @endif</td>

     </tr>
     @endif


               @empty
      <tr>
        <td colspan="8" class="text-center" > لا يوجد بيانات  </td>

        </tr>

@endforelse

        </table>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('includes.footer')
@endsection
@push('scripts')
@include('includes.immediate_available_btn')
@endpush




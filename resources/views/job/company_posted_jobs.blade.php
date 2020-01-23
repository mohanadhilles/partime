@extends('layouts.app')



@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end --> 



<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('Company Posted Jobs')])

<!-- Inner Page Title end -->



<div class="listpgWraper">

  <div class="container">

    <div class="row">

      @include('includes.company_dashboard_menu')

      

      <div class="col-md-9 col-sm-8"> 

        <div class="myads">

          <h3>{{__('Company Posted Jobs')}}

          <small class="pull-left" >
           <a class="btn btn-info" href="{{ route('post.job') }}"><i class="fa fa-file" aria-hidden="true"></i> {{__('New Post Job')}}</a>
          </small>
          </h3>
            <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم الطلب </th>
        <th class="text-right">الوظيفة المطلوبة</th>
        <th class="text-right"> حالة الطلب</th>
        <th class="text-right"> الدوام</th>
        <th class="text-right"> مكان العمل</th>
        <th class="text-right"> المفضلة </th>
        <th class="text-right"> المرشحين </th>
        <th class="text-right" >خياراتي</th>
        </tr>
        @forelse($jobs as $job)
            @php $company = $job->getCompany(); @endphp
            @php $getAppliedUserIdsArray = $job->getAppliedUserIdsArray() @endphp
            @php $getFavouriteAppliedUserIdsArray = $job->getFavouriteAppliedUserIdsArray() @endphp

        
          <tr>


        <td>{{$job->id}}  </td>
        <td>{{$job->title}} </td>
        <td><label class="fulltime"  style="background: #{{$job->getJobStatus('code')}}" >{{$job->getJobStatus('job_status')}}</label> </td>
        <td><label class="fulltime"  style="background: #{{$job->getJobShift('code')}}" >{{$job->getJobShift('job_shift')}}</label> </td>

        <td>{{$job->getCity('city')}} </td>
        <td><a href="{{route('list.favourite.applied.users', [$job->id])}}" title="{{ __('List Short Listed Candidates')}}" >
                <i class="fa fa-lg fa-star"></i>  {{count($getFavouriteAppliedUserIdsArray)}} {{ __('Candidates')}}</a> </td>
        <td><a href="{{route('list.applied.users', [$job->id])}}" title="{{__('List Candidates')}}" ><i class="fa fa-users fa-lg"></i>
        {{count($getAppliedUserIdsArray)}} {{ __('Candidates')}}</a></td>
        <td><a href="{{route('edit.front.job', [$job->id])}}" title="{{__('Edit')}}" ><i class="fa fa-edit"></i></a></td>
        </tr>
                          @empty
      <tr>
        <td colspan="9" class="text-center" > لا يوجد بيانات  </td>

        </tr>

@endforelse

        </table>




        </div>

      </div>

    </div>

  </div>

</div>

@include('includes.footer')

@endsection


@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('My Contracts')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
  <div class="container"> @include('flash::message')
    <div class="row">
      @include('includes.user_dashboard_menu')
      <div class="col-md-9 col-sm-8">
           <div class="myads">
          <h3>{{__('My Contracts')}}</h3>
        <div class="userccount">
          <div class="formpanel">
            <!-- Job Information -->
            <h5> {{__('Contract NO.')}} {{$contract->id}}</h5>
            <div class="row">

             </div>
        </div>
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








@extends('layouts.app')

@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 

<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('Job Details')]) 
<!-- Inner Page Title end -->


  <div class="container">
    <div class="row">
      @include('includes.company_dashboard_menu')
      
      <div class="col-md-10 col-sm-10"> 
        <div class="row">
      <div class="col-md-12">
        <div class="userccount">
          <div class="formpanel"> @include('flash::message') 
            <!-- Personal Information -->
            @include('job.inc.job')
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>

@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
.userccount p{ text-align:left !important;}
</style>
@endpush
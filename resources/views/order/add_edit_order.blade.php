@extends('layouts.app')

@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 

<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('Order Details')])
<!-- Inner Page Title end -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      @include('includes.user_dashboard_menu')
      
      <div class="col-md-10 col-sm-10"> 
        <div class="row">
      <div class="col-md-12">
        <div class="userccount">
          <div class="formpanel"> @include('flash::message') 
            <!-- Personal Information -->
            @include('order.inc.order')
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
@push('styles')
<style type="text/css">
.userccount p{ text-align:left !important;}
</style>
@endpush
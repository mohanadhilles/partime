@extends('layouts.app')
@section('content')
@include('includes.header')
@include('includes.company_dashboard_menu')
   <!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Dashboard')])
<!-- Inner Page Title end -->
@include('flash::message')
@include('includes.company_dashboard_stats')
@include('includes.footer')
@endsection


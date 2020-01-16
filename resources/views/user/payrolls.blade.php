@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('My Payroll')])

<?php

function calculate_percentage($totalWidth,$percentage = 25){

$new_width = ($percentage / 100) * $totalWidth;

return $new_width;
}


 ?>


<!-- Inner Page Title end -->
<div class="listpgWraper">
<div class="container">
  <div class="row"> @include('includes.user_dashboard_menu')
    <div class="col-md-9 col-sm-8">
      <div class="myads">
        <h3>{{__('My Payroll')}}</h3>
      <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم </th>
        <th class="text-right">الشركة</th>
        <th class="text-right"> اسم الوظيفة</th>

        <th class="text-right"> من   </th>
        <th class="text-right"> الي  </th>
        <th class="text-right"> سعر الساعة   </th>
        <th class="text-right"> عدد الساعات  </th>
        <th class="text-right"> عدد الأيام  </th>
        <th class="text-right"> رسوم المنصة </th>
        <th class="text-right"> اجمالي الإستحقاق  </th>
        <th class="text-right"> الحالة </th>
        <th class="text-right" >خياراتي</th>
        </tr>

            @forelse($payrolls as $payroll)

          <tr>
        <td>{{$payroll->id}}  </td>
        <td>{{$payroll->company_name }}  </td>
        <td>{{$payroll->job_title }}  </td>

        <td>{{$payroll->date_from}}  </td>
        <td>{{$payroll->date_to}}  </td>

        <td>{{$payroll->count_hourly_rate }}  </td>
        <td>{{$payroll->count_hours}}  </td>
        <td>{{$payroll->count_days}}  </td>
        <td>{{ calculate_percentage($payroll->netPay,$payroll->percentage_form_user)}}  </td>
        <td>{{$payroll->netPay - calculate_percentage($payroll->netPay) }}  </td>
        <td>{{$payroll->payslip_status}}  </td>
        <td> <a href="{{route('show.front.contract', [ 'id' =>$payroll->contract_id])}}" ><i class="fa fa-file" ></i> عقد العمل</a>  </td>

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
@push('scripts')
@include('includes.immediate_available_btn')
@endpush
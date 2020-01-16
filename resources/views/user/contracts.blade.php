@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('My Contracts')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
<div class="container">
  <div class="row"> @include('includes.user_dashboard_menu')
    <div class="col-md-9 col-sm-8">
      <div class="myads">
        <h3>{{__('My Contracts')}}</h3>
      <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم </th>
        <th class="text-right">الشركة</th>
        <th class="text-right"> اسم الوظيفة</th>
        <th class="text-right"> حالة العقد   </th>
        <th class="text-right"> من   </th>
        <th class="text-right"> الي  </th>
        <th class="text-right"> سعر الساعة  </th>
        <th class="text-right"> عدد الساعات  </th>
        <th class="text-right"> عدد الأيام  </th>
        <th class="text-right"> تاريخ الإنشاء </th>
        <th class="text-right"> صالح حتي </th>
        <th class="text-right"> تاريخ اخر تعديل </th>
        <th class="text-right" >خياراتي</th>
        </tr>
             @forelse($contracts as $contract)
          <tr>
        <td>{{$contract->id}}  </td>
        <td>{{$contract->company_name }}  </td>
        <td>{{$contract->job_title }}  </td>
        <td> <span style="background: #{{$contract->color_code}}" >{{$contract->contract_status}} </span>  </td>
        <td>{{$contract->date_from}}  </td>
        <td>{{$contract->date_to}}  </td>
        <td>{{$contract->hourly_rate}}  </td>
        <td>{{$contract->contract_hours}}  </td>
        <td>{{$contract->contract_days}}  </td>
        <td>{{$contract->created_at }}  </td>
        <td>{{$contract->expires_at }}  </td>
        <td>{{$contract->updated_at }}  </td>
        <td> <a href="{{route('show.front.contract', [ 'id' =>$contract->id ])}}" ><i class="fa fa-file" ></i> عرض العقد </a>  </td>

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
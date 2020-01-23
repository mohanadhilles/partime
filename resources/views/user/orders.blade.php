@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('My Orders')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
<div class="container">
  <div class="row"> @include('includes.user_dashboard_menu')
    <div class="col-md-9 col-sm-8">
      <div class="myads">
        <h3>{{__('My Orders')}}

        </h3>
             <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم الطلب </th>
        <th class="text-right"> تاريخ الطلب</th>
        <th class="text-right"> الراتب الحالي </th>
        <th class="text-right"> الراتب المتوقع </th>

        <th class="text-right"> الحاله </th>

        <th class="text-right" >خياراتي</th>
        </tr>

            @forelse($orders as $order)

          <tr>
        <td>{{$order->id }}  </td>
        <td>{{$order->created_at }}  </td>
        <td>{{$order->current_salary }}  </td>
        <td>{{$order->expected_salary }}  </td>

        <td>{{$order->getorderStatus('order_status') }}  </td>

   <td> <a href="{{route('my.edit.front.order', [ 'id' =>$order->id ])}}" ><i class="fa fa-file-text-o" ></i> عرض الطلب </a>  </td>

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
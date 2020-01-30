  @extends('layouts.app')



@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->



<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('My Payments')])

<!-- Inner Page Title end -->



<div class="listpgWraper">

  <div class="container">

    <div class="row">

      @include('includes.company_dashboard_menu')



          <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> {{__('My Payments')}}


                            </div>
                            <div class="card-block">
                               <div class="table-responsive">
             <table  class="table table-bordered text-right"   >
             <thead>
        <tr>
        <th class="text-right" >رقم مستند الدفع  </th>

        <th class="text-right"> حالة  السداد</th>
        <th class="text-right"> تاريخ السداد</th>
        <th class="text-right">  قيمة الدفعة</th>
        <th class="text-right"> طرق الدفع </th>

        <th class="text-right" >خياراتي</th>
        </tr>
                </thead>
                                    <tbody>
            @forelse($payments as $payment)

           <tr>
        <td>{{$payment->id}}  </td>
        <td>{{$payment->getInvoiceStatus('name')}}  </td>
        <td>{{$payment->transaction_date}}  </td>
        <td>{{$payment->amount}}  </td>
        <td>{{$payment->getPaymentMethod('name')}}  </td>
            <td> <a href="{{route('company.edit.front.payment', [ 'id' =>$payment->id ])}}" ><i class="fa fa-file-text-o" ></i> عرض الفاتورة </a>
</td>
     </tr>

           @empty
      <tr>
        <td colspan="6" class="text-center" > لا يوجد بيانات  </td>

        </tr>

@endforelse

        </tbody>
        </table>




        </div>
        </div>

      </div>

    </div>

  </div>

</div>

@include('includes.footer')

@endsection


@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('My Bank Accounts')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
<div class="container">
  <div class="row"> @include('includes.user_dashboard_menu')
    <div class="col-md-9 col-sm-8">
      <div class="myads">
        <h3>{{__('My Bank Accounts')}}
                  <small class="pull-left" >
           <a class="btn btn-info" href="{{ route('my.new.bank.account') }}"><i class="fa fa-file" aria-hidden="true"></i> {{__('New Bank Account')}}</a>
          </small>
        </h3>
              <div class="table-responsive">
             <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم  </th>
        <th class="text-right"> اسم البنك </th>
        <th class="text-right"> رقم الحساب  </th>



        <th class="text-right" >خياراتي</th>
        </tr>

            @forelse($bank_accounts as $bank_account)

          <tr>
        <td>{{$bank_account->id }}  </td>
        <td>{{$bank_account->bank_name }}  </td>
        <td>{{$bank_account->card_number }}  </td>


      <td>
       <a href="{{route('my.edit.front.account', [ 'id' =>$bank_account->id ])}}" ><i class="fa fa-money" ></i> عرض الحساب </a>
        </td>

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
</div>
@include('includes.footer')
@endsection
@push('scripts')
@include('includes.immediate_available_btn')
@endpush
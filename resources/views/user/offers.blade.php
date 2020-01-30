@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Part Time job applications')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
<div class="container">
  <div class="row"> @include('includes.user_dashboard_menu')
    <div class="col-md-9 col-sm-8">
      <div class="myads">
        <h3>{{__('Part Time job applications')}}

        </h3>
              <div class="table-responsive">
             <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم العرض </th>
        <th class="text-right"> تاريخ العرض</th>

        <th class="text-right"> إسم الشركة </th>
        <th class="text-right"> الحاله </th>

        <th class="text-right" >خياراتي</th>
        </tr>

            @forelse($offers as $offer)

          <tr>
        <td>{{$offer->id }}  </td>
        <td>{{$offer->created_at }}  </td>



        <td>{{$offer->id}}  </td>
        <td>{{$offer->id}}  </td>
        <td>   </td>
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
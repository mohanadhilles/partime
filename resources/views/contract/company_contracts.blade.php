  @extends('layouts.app')



@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->



<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('Contracts')])

<!-- Inner Page Title end -->



  <div class="container">

    <div class="row">

      @include('includes.company_dashboard_menu')




              <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> {{__('Contracts')}}

                                 <small class="pull-left" >
   <a class="btn btn-info" href="{{ route('posted.jobs',['job_status_id' => 1]) }}"><i class="fa fa-file-text" aria-hidden="true"></i> {{__('Pending Contracts')}} </a>
          <a class="btn btn-info" href="{{ route('post.job') }}"><i class="fa fa-file" aria-hidden="true"></i> {{__('New Contract')}}</a>
                   </small>
                            </div>
                            <div class="card-block">
                              <div class="table-responsive">
             <table  class="table table-bordered text-right"   >
             <thead>
        <tr>
        <th class="text-right" >رقم العقد</th>
        <th class="text-right">تاريخ العقد </th>
        <th class="text-right"> إسم الموظف</th>
        <th class="text-right"> الحاله </th>
        <th class="text-right"> مدة العقد </th>
        <th class="text-right"> الأيام المستخدمة </th>
        <th class="text-right"> الأيام المتبقيه  </th>
        <th class="text-right" >خياراتي</th>

        </tr>
           </thead>
                                    <tbody>
           @forelse ($contracts as $contract)
             <tr>
        <td>{{$contract->id}}  </td>
        <td>{{$contract->created_at}}  </td>
        <td>{{$contract->employee_name}}  </td>
        <td>{{$contract->contract_status }}  </td>
        <td>{{$contract->contract_days}}  </td>
        <td>{{$contract->reminig_days}}  </td>
        <td>{{$contract->contract_days - $contract->reminig_days }}  </td>
        <td> <a href="{{route('company.edit.front.contract', [ 'id' =>$contract->id ])}}" ><i class="fa fa-file" ></i> عرض العقد </a>
</td>
     </tr>
@empty
      <tr>
        <td colspan="10" class="text-center" > لا يوجد بيانات  </td>

        </tr>

@endforelse





        </tbody>
        </table>




        </div>
        </div>

      </div>

    </div>

  </div>



@include('includes.footer')

@endsection


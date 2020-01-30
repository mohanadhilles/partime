@extends('layouts.app')



@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->



<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('Employees')])

<!-- Inner Page Title end -->


  <div class="container">

    <div class="row">

      @include('includes.company_dashboard_menu')



                <div class="card">
                            <div class="card-header">
                                <i class="fa fa-align-justify"></i> {{__('Employees')}}


                            </div>
                            <div class="card-block">
                             <div class="table-responsive">
             <table  class="table table-bordered text-right"   >
             <thead>
        <tr>
        <th class="text-right" >رقم الموظف</th>
        <th class="text-right"> إسم الموظف</th>
        <th class="text-right"> الجنسية</th>
        <th class="text-right"> الجنس </th>
        <th class="text-right"> حالة الحساب </th>
        <th class="text-right">  تاريخ الإنشاء </th>

        <th class="text-right" >خياراتي</th>
        </tr>
                 </thead>
                                    <tbody>
            @forelse($employees as $employee)
             @php    $user = $employee->getUser();  @endphp

              <tr>
         <td>{{$employee->id}}  </td>
        <td>{{ $employee->getUser('name')  }}  </td>
        <td>{{$user->getNationality('nationality')}}  </td>
        <td>{{$user->getGender('gender')}}  </td>
        <td>{{ $employee->getEmployeeStatus('employee_status')  }}  </td>
         <td>{{$employee->created_at}}  </td>
        <td> <a href="{{route('company.edit.front.employee', [ 'id' =>$employee->id ])}}" ><i class="fa fa-file" ></i> عرض الموظف </a>

</td>     </tr>

       @empty
      <tr>
        <td colspan="7" class="text-center" > لا يوجد بيانات  </td>

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


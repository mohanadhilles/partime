  @extends('layouts.app')



@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->



<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('My Tickets')])

<!-- Inner Page Title end -->



<div class="listpgWraper">

  <div class="container">

    <div class="row">

      @include('includes.company_dashboard_menu')



      <div class="col-md-9 col-sm-8">

        <div class="myads">

          <h3>{{__('My Tickets')}}
            <small class="pull-left" >
           <a class="btn btn-info" href="{{ route('company.new.ticket') }}"><i class="fa fa-file" aria-hidden="true"></i> {{__('New Ticket')}}</a>
          </small>
          </h3>
            <table  class="table table-bordered text-right"   >

        <tr>
        <th class="text-right" >رقم الطلب </th>
        <th class="text-right"> تاريخ الاستفسار</th>
        <th class="text-right"> رقم العقد</th>
        <th class="text-right">  رقم العامل</th>
        <th class="text-right"> إسم الموظف </th>
        <th class="text-right"> الحاله </th>
        <th class="text-right"> نوع التذكرة </th>
        <th class="text-right"> الأهمية </th>
        <th class="text-right" >خياراتي</th>
        </tr>

            @forelse($tickets as $ticket)

          <tr>
        <td>{{$ticket->id}}  </td>
        <td>{{$ticket->created_at}}  </td>
        <td>{{$ticket->contract_id}}  </td>
        <td>{{$ticket->employee_id}}  </td>
        <td>{{$ticket->getEmployee('name')}}  </td>
        <td>{{$ticket->getTicketStatus('status')}}  </td>
        <td>{{$ticket->getTicketDepartment('department')}}  </td>
        <td>{{$ticket->getTicketPriority('priority')}}  </td>

            <td> <a href="{{route('company.edit.front.ticket', [ 'id' =>$ticket->id ])}}" ><i class="fa fa-file-text-o" ></i> عرض التذكرة </a>  </td>
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

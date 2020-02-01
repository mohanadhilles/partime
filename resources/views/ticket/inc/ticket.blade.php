 @if(isset($ticket))
{!! Form::model($ticket, array('method' => 'put', 'route' => array('company.update.front.ticket', $ticket->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $ticket->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.ticket'), 'class' => 'form')) !!}
@endif

      <div class="card">
                            <div class="card-header">
                               {{__('Ticket Details')}}
                            </div>
                            <div class="card-block">

<div class="row">
    <div class="col-md-8">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'subject') !!}">
     <label for="subject">{{__('Ticket Subject')}} </label>
     {!! Form::text('subject', null, array('class'=>'form-control', 'id'=>'subject', 'placeholder'=>__('Ticket Subject'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'subject') !!} </div>
  </div>

    <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'contract_id') !!}"  >
     <label for="contract_id">{{__('Select Contract Num')}} </label>
     <span id="default_state_dd">
         {!! Form::select('contract_id', ['' => __('Select Contract Num')]+$contracts, null, array('class'=>'form-control', 'id'=>'contract_id')) !!}


     </span> {!! APFrmErrHelp::showErrors($errors, 'contract_id') !!} </div>
  </div>

  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'ticket_department_id') !!}"  >
     <label for="ticket_department_id">{{__('Select ticket department')}} </label>
     <span id="default_state_dd">
         {!! Form::select('ticket_department_id', ['' => __('Select ticket department')]+$ticketDepartments,
          null, array('class'=>'form-control', 'id'=>'ticket_department_id')) !!}


     </span> {!! APFrmErrHelp::showErrors($errors, 'ticket_department_id') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'ticket_priority_id') !!}"  >
     <label for="ticket_priority_id">{{__('Select ticket priority')}} </label>
     <span id="default_city_dd">

         {!! Form::select('ticket_priority_id', ['' => __('Select ticket priority')]+$ticketPriorites, null
         , array('class'=>'form-control', 'id'=>'ticket_priority_id')) !!}


     </span> {!! APFrmErrHelp::showErrors($errors, 'ticket_priority_id') !!} </div>
  </div>

      <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'ticket_status_id') !!}"  >
     <label for="ticket_status_id">{{__('Select ticket status')}} </label>
        {!! Form::select('ticket_status_id', ['' => __('Select ticket status')]+$ticketStatuses,
        null, array('class'=>'form-control', 'id'=>'ticket_status_id')) !!}



       {!! APFrmErrHelp::showErrors($errors, 'ticket_status_id') !!} </div>
  </div>


  <div class="col-md-12">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'notes') !!}">
     <label for="notes">{{__('ticket note')}} </label>
    {!! Form::textarea('notes', null, array('class'=>'form-control', 'id'=>'notes', 'placeholder'=>__('ticket note'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'notes') !!} </div>
  </div>





  <div class="col-md-12">
    <div class="form-group">
      <button type="submit" class="btn">{{__('Update ticket')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
</div>
</div>
{!! Form::close() !!}
<hr>

@push('scripts')
@include('admin.shared.tinyMCEFront')

@endpush
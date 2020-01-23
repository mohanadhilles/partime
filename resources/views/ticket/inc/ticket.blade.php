<h5>{{__('Ticket Details')}}</h5>
@if(isset($ticket))
{!! Form::model($ticket, array('method' => 'put', 'route' => array('company.update.front.ticket', $ticket->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $ticket->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.ticket'), 'class' => 'form')) !!}
@endif
<div class="row">
    <div class="col-md-8">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'subject') !!}">
     {!! Form::text('subject', null, array('class'=>'form-control', 'id'=>'subject', 'placeholder'=>__('Ticket Subject'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'subject') !!} </div>
  </div>

    <div class="col-md-4">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'contract_id') !!}"  >
     <span id="default_state_dd">
         {!! Form::select('contract_id', ['' => __('Select Contract Num')]+$contracts, null, array('class'=>'form-control', 'id'=>'contract_id')) !!}


     </span> {!! APFrmErrHelp::showErrors($errors, 'contract_id') !!} </div>
  </div>

  <div class="col-md-4">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'department_id') !!}"  >
     <span id="default_state_dd">
         {!! Form::select('department_id', ['' => __('Select ticket department')]+$ticketDepartments, null, array('class'=>'form-control', 'id'=>'department_id')) !!}


     </span> {!! APFrmErrHelp::showErrors($errors, 'department_id') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'priority_id') !!}"  >
     <span id="default_city_dd">

         {!! Form::select('priority_id', ['' => __('Select ticket priority')]+$ticketPriorites, null, array('class'=>'form-control', 'id'=>'priority_id')) !!}


     </span> {!! APFrmErrHelp::showErrors($errors, 'priority_id') !!} </div>
  </div>

      <div class="col-md-4">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'status_id') !!}"  >
        {!! Form::select('status_id', ['' => __('Select ticket status')]+$ticketStatuses, null, array('class'=>'form-control', 'id'=>'status_id')) !!}



       {!! APFrmErrHelp::showErrors($errors, 'status_id') !!} </div>
  </div>


  <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'notes') !!}">
    {!! Form::textarea('notes', null, array('class'=>'form-control', 'id'=>'notes', 'placeholder'=>__('ticket note'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'notes') !!} </div>
  </div>





  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update ticket')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
{!! Form::close() !!}
<hr>

@push('scripts')
@include('admin.shared.tinyMCEFront')

@endpush
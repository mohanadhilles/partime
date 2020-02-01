
@if(isset($contract))
{!! Form::model($contract, array('method' => 'put', 'route' => array('company.update.front.contract', $contract->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $contract->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.contract'), 'class' => 'form')) !!}
@endif

 <div class="card">
                            <div class="card-header">
                             {{__('Contract Details')}}
                            </div>
                            <div class="card-block">
<div class="row">




           <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'date_from') !!}">
       <label for="date_from">{{__('date_from')}} </label>
    {!! Form::date('date_from', null, array('class'=>'form-control text-right datepicker',
     'id'=>'date_from', 'placeholder'=>__('date_from'), 'autocomplete'=>'off')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'date_from') !!} </div>
  </div>

           <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'date_to') !!}">
       <label for="date_to">{{__('date_to')}} </label>
    {!! Form::date('date_to', null, array('class'=>'form-control text-right datepicker', 'id'=>'date_to',
     'placeholder'=>__('date_to'), 'autocomplete'=>'off')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'date_to') !!} </div>
  </div>           

          <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'contract_days') !!}">
       <label for="contract_days">{{__('contract_days')}} </label>
     {!! Form::text('contract_days', null, array('class'=>'form-control', 'id'=>'hourly_rate', 'placeholder'=>__('contract_days'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'contract_days') !!} </div>
  </div>


            <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'hourly_rate') !!}">
       <label for="hourly_rate">{{__('hourly_rate')}} </label>
     {!! Form::text('hourly_rate', null, array('class'=>'form-control', 'id'=>'hourly_rate', 'placeholder'=>__('hourly_rate'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'hourly_rate') !!} </div>
  </div>



  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update contract')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
</div>
</div>

{!! Form::close() !!}
<hr>

@push('styles')
<style type="text/css">
.datepicker>div {
    display: block;
}
</style>
@endpush
@push('scripts')

<script type="text/javascript">
$(document).ready(function() {


	$(".datepicker").datepicker({
		autoclose: true,
		format:'yyyy-m-d'
	});
	});

</script>

@endpush
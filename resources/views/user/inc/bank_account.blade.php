<h5>{{__('Bank Account Details')}}</h5>
@if(isset($bank_account))
{!! Form::model($bank_account, array('method' => 'put', 'route' => array('my.update.front.account', $bank_account->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $bank_account->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('my.store.front.account'), 'class' => 'form')) !!}
@endif
<div class="row">
    <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'bank_name') !!}">
     {!! Form::text('bank_name', null, array('class'=>'form-control', 'id'=>'bank_name', 'placeholder'=>__('bank name'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'bank_name') !!} </div>
  </div>

      <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'card_number') !!}">
     {!! Form::text('card_number', null, array('class'=>'form-control', 'id'=>'card_number', 'placeholder'=>__('card number'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'card_number') !!} </div>
  </div>

  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Add Bank Account')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
{!! Form::close() !!}
<hr>

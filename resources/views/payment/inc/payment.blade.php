<h5>{{__('payment Details')}}</h5>
@if(isset($payment))
{!! Form::model($payment, array('method' => 'put', 'route' => array('company.update.front.payment', $payment->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $payment->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.payment'), 'class' => 'form')) !!}
@endif
<div class="row">
    <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'subject') !!}">
     {!! Form::text('subject', null, array('class'=>'form-control', 'id'=>'subject', 'placeholder'=>__('payment'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'subject') !!} </div>
  </div>



  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update payment')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
{!! Form::close() !!}
<hr>

@push('scripts')
@include('admin.shared.tinyMCEFront')

@endpush
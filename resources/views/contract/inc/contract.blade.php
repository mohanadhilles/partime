<h5>{{__('Contract Details')}}</h5>
@if(isset($contract))
{!! Form::model($contract, array('method' => 'put', 'route' => array('company.update.front.contract', $contract->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $contract->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.contract'), 'class' => 'form')) !!}
@endif
<div class="row">
    <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'subject') !!}">
     {!! Form::text('subject', null, array('class'=>'form-control', 'id'=>'subject', 'placeholder'=>__('contract'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'subject') !!} </div>
  </div>










  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update contract')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
{!! Form::close() !!}
<hr>

@push('scripts')
@include('admin.shared.tinyMCEFront')

@endpush
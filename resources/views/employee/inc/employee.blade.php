<h5>{{__('Eemployee Details')}}</h5>
@if(isset($employee))
{!! Form::model($employee, array('method' => 'put', 'route' => array('company.update.front.employee', $employee->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $employee->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.employee'), 'class' => 'form')) !!}
@endif
<div class="row">
    <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'name') !!}">
     {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>__('employee Name'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'name') !!} </div>
  </div>

  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update employee')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
    </div>
  </div>
</div>
{!! Form::close() !!}
<hr>

@push('scripts')
@include('admin.shared.tinyMCEFront')

@endpush
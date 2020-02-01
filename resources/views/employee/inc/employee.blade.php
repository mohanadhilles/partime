
@if(isset($employee))
{!! Form::model($employee, array('method' => 'put', 'route' => array('company.update.front.employee', $employee->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $employee->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('company.store.front.employee'), 'class' => 'form')) !!}
@endif

     <div class="card">
                            <div class="card-header">
                              {{__('Eemployee Details')}}
                            </div>
                            <div class="card-block">
<div class="row">
    <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'name') !!}">
          <label for="name">{{__('employee Name')}} </label>
     {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>__('employee Name'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'name') !!} </div>
  </div>
  <div class="col-md-6">
    <div class="form-group" >
     <label for="linkedin_link">{{__('linkedin Link')}} </label><br>
     <a class="btn btn-primary" target="_blank" href="{{  $employee->linkedin_link }}">{{__('linkedin Link')}}
                  <i class="fa fa-linkedin"></i></a>
    </div>
    </div>



  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update employee')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
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
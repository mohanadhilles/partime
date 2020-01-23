{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    {!! Form::hidden('id', null) !!}
      <div class="form-group {!! APFrmErrHelp::hasError($errors, 'user_id') !!}" id="num_of_positions_div">
        {!! Form::label('user_id', 'user_id#', ['class' => 'bold']) !!}
        {!! Form::select('user_id', ['' => 'Select user#']+$users, null, array('class'=>'form-control', 'id'=>'user_id')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'user_id') !!}
    </div>
    <div class="form-actions">
        {!! Form::button('ترشيح <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>', array('class'=>'btn btn-large btn-primary', 'type'=>'submit')) !!}
    </div>
</div>
@push('css')
<style type="text/css">
.datepicker>div {
    display: block;
}
</style>
@endpush
@push('scripts')
@include('admin.shared.tinyMCEFront')
<script type="text/javascript">
$(document).ready(function() {
    $('.select2-multiple').select2({
    	placeholder: "Select Required Skills",
    	allowClear: true
	});



     });



</script>
@endpush
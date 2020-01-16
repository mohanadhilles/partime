<h5>{{__('Job Details')}}</h5>
@if(isset($job))
{!! Form::model($job, array('method' => 'put', 'route' => array('update.front.job', $job->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $job->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('store.front.job'), 'class' => 'form')) !!}
@endif
<div class="row">
 
  <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'title') !!}"> {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>__('Job title'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'title') !!} </div>
  </div>
  <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'description') !!}"> {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>__('Job Description'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'description') !!} </div>
  </div>

  <div class="col-md-4">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'num_of_positions') !!}" id="num_of_positions_div">
     {!! Form::select('num_of_positions', ['' => __('Select number of Positions')]+MiscHelper::getNumPositions(), null, array('class'=>'form-control', 'id'=>'num_of_positions')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'num_of_positions') !!} </div>
  </div>


     <div class="col-md-4">
                <div class="formrow {!! APFrmErrHelp::hasError($errors, 'nationality_id') !!}">
                 {!! Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null, array('class'=>'form-control', 'id'=>'nationality_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'nationality_id') !!} </div>
              </div>


        <div class="col-md-4">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'gender_id') !!}" id="gender_id_div"> {!! Form::select('gender_id', ['' => __('No Preference')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'gender_id') !!} </div>
  </div>


    <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'candidate_working') !!}">
    {!! Form::text('candidate_working', null, array('class'=>'form-control', 'id'=>'candidate_working', 'placeholder'=>'هل تفضل المرشح يعمل في شركة معينة ؟ أضف إسم الشركة' )) !!}
      {!! APFrmErrHelp::showErrors($errors, 'candidate_working') !!} </div>
  </div>

      <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'candidate_was_working') !!}">
     {!! Form::text('candidate_was_working', null, array('class'=>'form-control', 'id'=>'candidate_was_working', 'placeholder'=>'هل تفضل المرشح كان يعمل بشركة معينة سابقا ؟ أضف إسم الشركة' )) !!}
      {!! APFrmErrHelp::showErrors($errors, 'candidate_was_working') !!} </div>
  </div>

    <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'working_hours') !!}" id="salary_div">
     {!! Form::number('working_hours', null, array('class'=>'form-control', 'id'=>'working_hours', 'placeholder'=>__('Select number of working hours'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'working_hours') !!} </div>
  </div>

    <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'job_shift_id') !!}" id="job_shift_id_div"> {!! Form::select('job_shift_id', ['' => __('Select Job Shift')]+$jobShifts, null, array('class'=>'form-control', 'id'=>'job_shift_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'job_shift_id') !!} </div>
  </div>


   <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'work_days') !!}" id="salary_div">
     {!! Form::number('work_days', null, array('class'=>'form-control', 'id'=>'work_days', 'placeholder'=>__('Select number of work days'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'work_days') !!} </div>
  </div>

    <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'contract_period_id') !!}" id="contract_period_id_div">
    {!! Form::select('contract_period_id', ['' => __('Select Contract period')]+$contractPeriods, null, array('class'=>'form-control', 'id'=>'contract_period_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'contract_period_id') !!} </div>
  </div>



    <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'salary') !!}" id="salary_div">
     {!! Form::number('salary', null, array('class'=>'form-control', 'id'=>'salary', 'placeholder'=>__('Salary'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'salary') !!} </div>
  </div>
      <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'expected_date') !!}">
    {!! Form::text('expected_date', null, array('class'=>'form-control text-right datepicker', 'id'=>'expected_date', 'placeholder'=>__('Job expected date'), 'autocomplete'=>'off')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'expected_date') !!} </div>
  </div>

   <div class="col-md-6">
    <div class="formrow" id="div_language_id">
      <?php
			$language_id = (isset($profileLanguage)? $profileLanguage->language_id:44);
			?>
      {!! Form::select('language_id', [''=>__('Select language')]+$languages, $language_id, array('class'=>'form-control', 'id'=>'language_id')) !!} <span class="help-block language_id-error"></span> </div>
        </div>
       <div class="col-md-6">
    <div class="formrow" id="div_language_level_id">
      <?php
			$language_level_id = (isset($profileLanguage)? $profileLanguage->language_level_id:null);
			?>
      {!! Form::select('language_level_id', [''=>__('Select Language Level')]+$languageLevels, $language_level_id, array('class'=>'form-control', 'id'=>'language_level_id')) !!} <span class="help-block language_level_id-error"></span> </div>
  </div>

  <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'country_id') !!}" id="country_id_div">
     {!! Form::select('country_id', ['' => __('Select Country')]+$countries, old('country_id', (isset($job))? $job->country_id:$siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </div>
  </div>

  <div class="col-md-6">
  @if(isset($cities))
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}" id="city_id_div"> <span id="default_city_dd">
     {!! Form::select('city_id', ['' => __('Select City')]+$cities, null, array('class'=>'form-control', 'id'=>'city_id')) !!}
     </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
  </div>
  @else
         <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}" id="city_id_div"> <span id="default_city_dd">
     {!! Form::select('city_id', ['' => __('Select City')], null, array('class'=>'form-control', 'id'=>'city_id')) !!}
     </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
  </div>
  @endif






    {!! Form::hidden('salary_currency', 'SAR', array('class'=>'form-control', 'id'=>'salary_currency', 'placeholder'=>__('Select Salary Currency'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'salary_currency') !!}

        {!! Form::hidden('salary_period_id', 1, array('class'=>'form-control', 'id'=>'salary_period_id', 'placeholder'=>__('Select Salary Period'))) !!}
        {!! Form::hidden('job_type_id', 5, array('class'=>'form-control', 'id'=>'job_type_id', 'placeholder'=>__('Select Job Type'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'job_type_id') !!}
      {!! APFrmErrHelp::showErrors($errors, 'salary_period_id') !!}







  <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'functional_area_id') !!}" id="functional_area_id_div">
    {!! Form::select('functional_area_id', ['' => __('Select Functional Area')]+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'functional_area_id') !!} </div>
  </div>





  <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div">
     {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>
  </div>
  <div class="col-md-6">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'job_experience_id') !!}" id="job_experience_id_div"> {!! Form::select('job_experience_id', ['' => __('Select Required job experience')]+$jobExperiences, null, array('class'=>'form-control', 'id'=>'job_experience_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'job_experience_id') !!} </div>
  </div>

  <div class="col-md-12">
    <div class="formrow">
      <button type="submit" class="btn">{{__('Update Job')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
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

    $('.select2-multiple').select2({
    	placeholder: "{{__('Select Required Skills')}}",
    	allowClear: true
	});
	$(".datepicker").datepicker({
		autoclose: true,
		format:'yyyy-m-d'
	});
    $('#country_id').on('change', function (e) {
    e.preventDefault();
   // filterLangStates(0);
    filterLangAllCities(0);

    });

     });




      function filterLangAllCities()
    {
    var country_id = $('#country_id').val();
    if (country_id != ''){
    $.post("{{ route('filter.lang.states.dropdown.all.cities') }}", {country_id: country_id, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#default_city_dd').html(response);

            });
    }
    }



</script>
  @if(!isset($job))
  <script type="text/javascript">
  filterLangAllCities();
  </script>
  @endif
@endpush
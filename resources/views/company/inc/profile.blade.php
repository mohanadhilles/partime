 {!! Form::model($company, array('method' => 'put', 'route' => array('update.company.profile'), 'class' => 'form', 'files'=>true)) !!}

                            <div class="card">
                            <div class="card-header">
                               {{__('Company Information')}}
                            </div>
                            <div class="card-block">
                            <h6>{{__('Company Logo')}}</h6>
<div class="row">

  <div class="col-md-6">
    <div class="form-group"> {{ ImgUploader::print_image("company_logos/$company->logo", 100, 100) }} </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <div id="thumbnail"></div>
      <label class="btn btn-default"> {{__('Select Company Logo')}}
        <input type="file" name="logo" id="logo" style="display: none;">
      </label>
      {!! APFrmErrHelp::showErrors($errors, 'logo') !!} </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'name') !!}">
         <label for="name">{{ __('Company Name') }}</label>
    {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>__('Company Name'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'name') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'email') !!}">
        <label for="email">{{ __('Company Name') }}</label>
     {!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Company Email'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'email') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'password') !!}">
       <label for="password">{{ __('Password') }}</label>
     {!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>__('Password'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'password') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'ceo') !!}">
     <label for="password">{{ __('Company CEO') }}</label>
     {!! Form::text('ceo', null, array('class'=>'form-control', 'id'=>'ceo', 'placeholder'=>__('Company CEO'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'ceo') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'industry_id') !!}">

        <label for="industry_id">{{ __('Select Industry') }}</label>
    {!! Form::select('industry_id', ['' => __('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'industry_id') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'ownership_type') !!}">
     <label for="ownership_type_id">{{ __('Select Ownership type') }}</label>
    {!! Form::select('ownership_type_id', ['' => __('Select Ownership type')]+$ownershipTypes, null, array('class'=>'form-control', 'id'=>'ownership_type_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'ownership_type_id') !!} </div>
  </div>
  <div class="col-md-12">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'description') !!}">
     <label for="description">{{ __('Company details') }}</label>
     {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>__('Company details'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'description') !!} </div>
  </div>
  <div class="col-md-12">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'location') !!}">
     <label for="location">{{ __('Location') }}</label>
     {!! Form::text('location', null, array('class'=>'form-control', 'id'=>'location', 'placeholder'=>__('Location'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'location') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'no_of_offices') !!}">
     <label for="no_of_offices">{{ __('Select num. of offices') }}</label>
    {!! Form::select('no_of_offices', ['' => __('Select num. of offices')]+MiscHelper::getNumOffices(), null, array('class'=>'form-control', 'id'=>'no_of_offices')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'no_of_offices') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'website') !!}">
     <label for="website">{{ __('Website') }}</label>
    {!! Form::text('website', null, array('class'=>'form-control', 'id'=>'website', 'placeholder'=>__('Website'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'website') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'no_of_employees') !!}">
     <label for="no_of_employees">{{ __('Select num. of employees') }}</label>
     {!! Form::select('no_of_employees', ['' => __('Select num. of employees')]+MiscHelper::getNumEmployees(), null, array('class'=>'form-control', 'id'=>'no_of_employees')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'no_of_employees') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'established_in') !!}">
     <label for="established_in">{{ __('Established In') }}</label>
    {!! Form::select('established_in', ['' => __('Select Established In')]+MiscHelper::getEstablishedIn(), null, array('class'=>'form-control', 'id'=>'established_in')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'established_in') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'fax') !!}">
     <label for="fax">{{ __('Fax') }}</label>
     {!! Form::text('fax', null, array('class'=>'form-control', 'id'=>'fax', 'placeholder'=>__('Fax'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'fax') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'phone') !!}">
     <label for="phone">{{ __('Phone') }}</label>
    {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__('Phone'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'phone') !!} </div>
  </div>
  <div class="clearfix"></div>
  <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'facebook') !!}">
     <label for="facebook">{{ __('Facebook') }}</label>
    {!! Form::text('facebook', null, array('class'=>'form-control', 'id'=>'facebook', 'placeholder'=>__('Facebook'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'facebook') !!} </div>
  </div>
  <div class="col-md-6">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'twitter') !!}">
     <label for="twitter">{{ __('Twitter') }}</label>
    {!! Form::text('twitter', null, array('class'=>'form-control', 'id'=>'twitter', 'placeholder'=>__('Twitter'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'twitter') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'linkedin') !!}">
     <label for="linkedin">{{ __('Linkedin') }}</label>
    {!! Form::text('linkedin', null, array('class'=>'form-control', 'id'=>'linkedin', 'placeholder'=>__('Linkedin'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'linkedin') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'google_plus') !!}">
     <label for="google_plus">{{ __('Google+') }}</label>
     {!! Form::text('google_plus', null, array('class'=>'form-control', 'id'=>'google_plus', 'placeholder'=>__('Google+'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'google_plus') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'pinterest') !!}">
     <label for="pinterest">{{ __('Pinterest') }}</label>
    {!! Form::text('pinterest', null, array('class'=>'form-control', 'id'=>'pinterest', 'placeholder'=>__('Pinterest'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'pinterest') !!} </div>
  </div>
  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
     <label for="country_id">{{ __('Select Country') }}</label>
     {!! Form::select('country_id', ['' => __('Select Country')]+$countries, old('country_id', (isset($company))? $company->country_id:$siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </div>
  </div>

  <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
     <label for="city_id">{{ __('Select City') }}</label>
    <span id="default_city_dd"> {!! Form::select('city_id', ['' => __('Select City')], null, array('class'=>'form-control', 'id'=>'city_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
  </div>
  <div class="col-md-12">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'map') !!}">

     <label for="map">{{ __('Google Map') }}</label>
      {!! Form::textarea('map', null, array('class'=>'form-control', 'id'=>'map', 'placeholder'=>__('Google Map'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'map') !!} </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <button type="submit" class="btn btn-info">{{__('Update Profile and Save')}} <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
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
    $(document).ready(function(){
   $('#country_id').on('change', function (e) {
    e.preventDefault();
    filterLangAllCities();
    });
    filterLangAllCities();



	/*******************************/
	var fileInput = document.getElementById("logo");
        fileInput.addEventListener("change", function (e) {
            var files = this.files
            showThumbnail(files)
        }, false)
	});

	function showThumbnail(files) {
            $('#thumbnail').html('');
            for (var i = 0; i < files.length; i++) {
                var file = files[i]
                var imageType = /image.*/

                if (!file.type.match(imageType)) {
                    console.log("Not an Image");
                    continue;
                }

                var reader = new FileReader()
                reader.onload = (function (theFile) {
                    return function (e) {
                        $('#thumbnail').append('<div class="fileattached"><img height="100px" src="' + e.target.result + '" > <div>' + theFile.name + '</div><div class="clearfix"></div></div>');
                    };
                }(file))

                var ret = reader.readAsDataURL(file);
            }
        }



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
@endpush
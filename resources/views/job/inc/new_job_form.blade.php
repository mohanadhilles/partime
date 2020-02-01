
            {!! Form::model($user, array('method' => 'put', 'route' => array('my.profile'), 'class' => 'form', 'files'=>true)) !!}

{!! Form::hidden('apply_job', 1, null) !!}
              <div class="card">
                            <div class="card-header">
                              {{__('New Job Application')}}
                            </div>
                            <div class="card-block">




          <div class="row">
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'first_name') !!}">
                  <label for="first_name">{{__('First Name')}} </label>
                 {!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name', 'placeholder'=>__('First Name'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'first_name') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'middle_name') !!}">
                                   <label for="middle_name">{{__('Middle Name')}} </label>

                 {!! Form::text('middle_name', null, array('class'=>'form-control', 'id'=>'middle_name', 'placeholder'=>__('Middle Name'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'middle_name') !!}</div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'last_name') !!}">

                   <label for="last_name">{{__('Last Name')}} </label>
                {!! Form::text('last_name', null, array('class'=>'form-control', 'id'=>'last_name', 'placeholder'=>__('Last Name'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'last_name') !!}</div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'father_name') !!}">
                   <label for="father_name">{{__('Father Name')}} </label>


                {!! Form::text('father_name', null, array('class'=>'form-control', 'id'=>'father_name', 'placeholder'=>__('Father Name'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'father_name') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'email') !!}">

                  <label for="email">{{__('Email')}} </label>

                {!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Email'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'email') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'password') !!}">
                  <label for="password">{{__('Password')}} </label>
                 {!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>__('Password'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'password') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'gender_id') !!}">
                 <label for="gender_id">{{__('Select Gender')}} </label>
                {!! Form::select('gender_id', [''=>__('Select Gender')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'gender_id') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'marital_status_id') !!}">
                  <label for="marital_status_id">{{__('Select Marital Status')}} </label>
                {!! Form::select('marital_status_id', [''=>__('Select Marital Status')]+$maritalStatuses, null, array('class'=>'form-control', 'id'=>'marital_status_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'marital_status_id') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
                  <label for="country_id">{{__('Select Country')}} </label>
                <?php $country_id = old('country_id', (isset($user) && (int)$user->country_id > 0)? $user->country_id:$siteSetting->default_country_id); ?>
             {!! Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id, array('class'=>'form-control', 'id'=>'country_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </div>
              </div>

              <div class="col-md-6">
            <?php $city_id = old('city_id', (isset($user) && (int)$user->city_id > 0)? $user->city_id: NULL);


             ?>

                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
                  <label for="city_id">{{__('Select City')}} </label>
                <span id="city_dd"> {!! Form::select('city_id', [''=>__('Select City')]+$cities, $city_id, array('class'=>'form-control', 'id'=>'city_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
              </div>
               <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'neighborhood') !!}">
                  <label for="neighborhood">حي السكن </label>

                 {!! Form::text('neighborhood', null, array('class'=>'form-control', 'id'=>'neighborhood', 'placeholder'=> 'حي السكن'  ))!!}
                  {!! APFrmErrHelp::showErrors($errors, 'neighborhood') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'nationality_id') !!}">
                  <label for="nationality_id">{{__('Select Nationality')}} </label>
                 {!! Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null, array('class'=>'form-control', 'id'=>'nationality_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'nationality_id') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'date_of_birth') !!}">
                  <label for="date_of_birth">{{__('Date of Birth')}} </label>
                 {!! Form::date('date_of_birth', null, array('class'=>'form-control text-right datepicker', 'id'=>'date_of_birth', 'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'date_of_birth') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'national_id_card_number') !!}">
                   <label for="national_id_card_number">{{__('National ID Card#')}} </label>
                 {!! Form::text('national_id_card_number', null, array('class'=>'form-control', 'id'=>'national_id_card_number', 'placeholder'=>__('National ID Card#'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'national_id_card_number') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'phone') !!}">

                  <label for="phone">{{__('Phone')}} </label>
                 {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__('Phone'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'phone') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'mobile_num') !!}">
                  <label for="mobile_num">{{__('Mobile Number')}} </label>
                 {!! Form::text('mobile_num', null, array('class'=>'form-control', 'id'=>'mobile_num', 'placeholder'=>__('Mobile Number'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'mobile_num') !!} </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'job_experience_id') !!}">
                  <label for="job_experience_id">{{__('Select Experience')}} </label>
                {!! Form::select('job_experience_id', [''=>__('Select Experience')]+$jobExperiences, null, array('class'=>'form-control', 'id'=>'job_experience_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'job_experience_id') !!} </div>
              </div>


                <div class="col-md-4">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div">
      <label for="degree_level_id">{{__('Select Required Degree Level')}} </label>
     {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, $degree_level_id, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
      {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>
  </div>
    <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'language_level_id') !!}">
                  <label for="language_level_id"> مستوى اللغة الانجليزية  </label>
                 {!! Form::select('language_level_id', [''=>__(' مستوى اللغة الانجليزية ')]+$languageLevels,
                 $language_level_id, array('class'=>'form-control', 'id'=>'language_level_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'language_level_id') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'industry_id') !!}">
                  <label for="industry_id">{{__('Select Industry')}} </label>
                 {!! Form::select('industry_id', [''=>__('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'industry_id') !!} </div>
              </div>
              <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'functional_area_id') !!}">

                  <label for="functional_area_id">{{__('Select Functional Area')}} </label>
                 {!! Form::select('functional_area_id', [''=>__('Select Functional Area')]+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'functional_area_id') !!} </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'current_salary') !!}">
                  <label for="current_salary">اخر راتب شهري</label>
                {!! Form::text('current_salary', null, array('class'=>'form-control', 'id'=>'current_salary', 'placeholder'=>'اخر راتب شهري' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'current_salary') !!} </div>
              </div>
              <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'expected_salary') !!}">
                  <label for="expected_salary">الراتب المتوقع (عمل جزئي) </label>
                 {!! Form::text('expected_salary', null, array('class'=>'form-control', 'id'=>'expected_salary', 'placeholder'=> 'الراتب المتوقع (عمل جزئي) ' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'expected_salary') !!} </div>
              </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'last_job_position') !!}">
                  <label for="last_job_position">أخر مسمى وظيفي  </label>
                 {!! Form::text('last_job_position', null, array('class'=>'form-control', 'id'=>'last_job_position', 'placeholder'=> 'أخر مسمى وظيفي ' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'last_job_position') !!} </div>
              </div>

                  {!! Form::hidden('salary_currency', 'SAR', array('class'=>'form-control', 'id'=>'salary_currency', 'placeholder'=>__('Select Salary Currency'))) !!}
      {!! APFrmErrHelp::showErrors($errors, 'salary_currency') !!}



              <div class="col-md-12">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'street_address') !!}">
                  <label for="street_address">{{ __('Street Address') }}</label>
                {!! Form::text('street_address', null, array('class'=>'form-control', 'id'=>'street_address', 'placeholder'=>__('Street Address'))) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'street_address') !!} </div>
              </div>

                  <div class="col-md-12">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'linkedin_link') !!}">
                  <label for="linkedin_link">رابط بروفايلك </label>
                 {!! Form::url('linkedin_link', null, array('class'=>'form-control', 'id'=>'linkedin_link', 'placeholder'=> 'ادخل عنوان رابط بروفايلك في www.linkedin.com ' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'linkedin_link') !!} </div>
              </div>














                        <div class="col-md-12">
              <div class="card ">
   <div class="card-block">
  <div class="col-md-12">
              <div class="card  ">
  <div class="card-header">{!! Form::label('is_currently_working', __('هل تعمل حاليا'), ['class' => '']) !!} </div>
  <div class="card-block">

          <div class="col-md-12">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'is_currently_working') !!}">
      <div class="radio-list">
        <?php
            $is_work_now_1 = '';
            $is_work_now_2= 'checked="checked"';
            if (old('is_currently_working', ((isset($user)) ? $user->is_currently_working : 0)) == 1) {
                $is_work_now_1 = 'checked="checked"';
                $is_work_now_2 = '';
            }
            ?>
        <label class="radio-inline">
          <input id="hide_salary_yes" name="is_currently_working" type="radio" value="1" {{$is_work_now_1}}>
        &nbsp; &nbsp;&nbsp;{{__('Yes')}}&nbsp; &nbsp;&nbsp;</label>
        <label class="radio-inline">
          <input id="hide_salary_no" name="is_currently_working" type="radio" value="0" {{$is_work_now_2}}>
         &nbsp;&nbsp;&nbsp; {{__('No')}} &nbsp;&nbsp;&nbsp; </label>
      </div>
      {!! APFrmErrHelp::showErrors($errors, 'is_currently_working') !!} </div>
  </div>



                <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'company') !!}">
                  <label for="company"> اسم الشركة التي تعمل بها حاليا </label>
                 {!! Form::text('company', null, array('class'=>'form-control', 'id'=>'company', 'placeholder'=> ' اسم الشركة التي تعمل بها حاليا ' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'company') !!} </div>
              </div>

                <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'description') !!}">
                  <label for="description">نوع النشاط التجاري </label>
                 {!! Form::text('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=> 'نوع النشاط التجاري' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'description') !!} </div>
              </div>
  </div>
  </div>
  </div>
                        <div class="col-md-12">
              <div class="card  ">
  <div class="card-header">فترة عملك الحالي (من....) (الي...)</div>
  <div class="card-block">
                 <div class="col-md-2">
                 <div class="form-group">من :</div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'time_from') !!}">
                 {!! Form::time('time_from', null, array('class'=>'form-control', 'id'=>'time_from', 'placeholder'=> 'فترة عملك الحالي (من....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'time_from') !!} </div>
              </div>
                <div class="col-md-2">
                 <div class="form-group">الي : </div>
                 </div>
                 <div class="col-md-4">

                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'time_to') !!}">
                 {!! Form::time('time_to', null, array('class'=>'form-control', 'id'=>'time_to', 'placeholder'=> 'فترة عملك الحالي (الي....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'time_to') !!} </div>
              </div>


               <div class="col-md-12">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'mall_id') !!}">
                  <label for="mall_id">إذا عملك الحالي بمجمع تجاري إختر اسم المجمع </label>
                 {!! Form::select('mall_id', [''=>__('إذا عملك الحالي بمجمع تجاري إختر اسم المجمع')]+$malls
                 , null, array('class'=>'form-control', 'id'=>'mall_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'mall_id') !!} </div>
              </div>
              </div>
              </div>
              </div>



              </div>
              </div>
              </div>

                             <!--appropriate_work_time-->
                   <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_id') !!}">
                  <label for="appropriate_work_time_id">'فترة العمل (بارتايم) المناسبة لك </label>
                 {!! Form::select('appropriate_work_time_id', [''=>__('فترة العمل (بارتايم) المناسبة لك')]+$jobShifts,
                  null, array('class'=>'form-control', 'id'=>'appropriate_work_time_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_id') !!} </div>
              </div>
                     <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'work_time_id') !!}">
                  <label for="work_time_id">عدد الساعات العمل بارتايم</label>
                 {!! Form::select('work_time_id', [''=>__('عدد الساعات العمل بارتايم')]+$workTimes,
                  null, array('class'=>'form-control', 'id'=>'work_time_id')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'work_time_id') !!} </div>
              </div>

                         <div class="col-md-12">
              <div class="card  ">
  <div class="card-header">حدد اوقات العمل بارتايم المفضله </div>
  <div class="card-block">

         <div class="col-md-12">
                  <div class="col-md-2">
                 <div class="form-group">من :</div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_from_1') !!}">
                 {!! Form::time('appropriate_work_time_from_1', null, array('class'=>'form-control', 'id'=>'appropriate_work_time_from_1', 'placeholder'=> 'فترة عملك الحالي (من....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_from_1') !!} </div>
              </div>
                <div class="col-md-2">
                 <div class="form-group">الي : </div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_to_1') !!}">
                 {!! Form::time('appropriate_work_time_to_1', null, array('class'=>'form-control', 'id'=>'appropriate_work_time_to_1', 'placeholder'=> 'فترة عملك الحالي (الي....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_to_1') !!} </div>
              </div>
              </div>
               <div class="col-md-12">
                  <div class="col-md-2">
                 <div class="form-group">من :</div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_from_2') !!}">
                 {!! Form::time('appropriate_work_time_from_2', null, array('class'=>'form-control', 'id'=>'appropriate_work_time_from_2', 'placeholder'=> 'فترة عملك الحالي (من....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_from_2') !!} </div>
              </div>
                <div class="col-md-2">
                 <div class="form-group">الي : </div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_to_2') !!}">
                 {!! Form::time('appropriate_work_time_to_2', null, array('class'=>'form-control', 'id'=>'appropriate_work_time_to_2', 'placeholder'=> 'فترة عملك الحالي (الي....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_to_2') !!} </div>
              </div>
              </div>

                  <div class="col-md-12">
                  <div class="col-md-2">
                 <div class="form-group">من :</div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_from_3') !!}">
                 {!! Form::time('appropriate_work_time_from_3', null, array('class'=>'form-control', 'id'=>'appropriate_work_time_from_3', 'placeholder'=> 'فترة عملك الحالي (من....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_from_3') !!} </div>
              </div>
                <div class="col-md-2">
                 <div class="form-group">الي : </div>
                 </div>
                 <div class="col-md-4">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'appropriate_work_time_to_3') !!}">
                 {!! Form::time('appropriate_work_time_to_3', null, array('class'=>'form-control', 'id'=>'appropriate_work_time_to_3', 'placeholder'=> 'فترة عملك الحالي (الي....)' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'appropriate_work_time_to_3') !!} </div>
              </div>
              </div>
  </div>
</div>
</div>

                  <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'have_you_a_car') !!}">
                  <label for="have_you_a_car">هل متوفر لديك سيارة </label>
                 {!! Form::select('have_you_a_car', [''=>__('هل متوفر لديك سيارة')]+$ask, null, array('class'=>'form-control', 'id'=>'have_you_a_car')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'have_you_a_car') !!} </div>
              </div>

                  <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'have_you_computer') !!}">
                  <label for="have_you_computer">  هل متوفر جهاز حاسب الى وانترنت </label>
                 {!! Form::select('have_you_computer', [''=>__('  هل متوفر جهاز حاسب الى وانترنت')]+$ask, null, array('class'=>'form-control', 'id'=>'have_you_computer')) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'have_you_computer') !!} </div>
              </div>



               <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'expected_join_date') !!}">
                  <label for="expected_join_date">التاريخ المتوقع للإنضمام </label>
                 {!! Form::date('expected_join_date', null, array('class'=>'form-control text-right datepicker',
                  'id'=>'expected_join_date', 'placeholder'=> 'التاريخ المتوقع للإنضمام' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'expected_join_date') !!} </div>
              </div>

            <div class="col-md-6">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'interested_job') !!}">
                  <label for="interested_job">ما هو المسمى الوظيفي (بارتايم) المهتم به  </label>
                 {!! Form::text('interested_job', null, array('class'=>'form-control', 'id'=>'interested_job', 'placeholder'=> 'ما هو المسمى الوظيفي (بارتايم) المهتم به ' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'interested_job') !!} </div>
              </div>



              <div class="col-md-12">
                <div class="form-group {!! APFrmErrHelp::hasError($errors, 'notes') !!}">
                  <label for="notes">ملاحظات</label>
                 {!! Form::textarea('notes', null, array('class'=>'form-control', 'id'=>'notes', 'placeholder'=> 'ملاحظات' )) !!}
                  {!! APFrmErrHelp::showErrors($errors, 'notes') !!} </div>
              </div>


              <div class="col-md-12">
                <div class="form-group"><button type="submit" class="btn btn-info">{{__('Apply on Job')}}  <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></button></div>
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
.help-block .help-block-error{
    color: #FF0000;
}

</style>
@endpush
@push('scripts')
<script type="text/javascript">
$(document).ready( function() {
	initdatepicker();
	$('#salary_currency').typeahead({
		source:  function (query, process) {
			return $.get("{{ route('typeahead.currency_codes') }}", { query: query }, function (data) {
				console.log(data);
				data = $.parseJSON(data);
				return process(data);
			});
		}
    });

    $('#country_id').on('change', function (e) {
    e.preventDefault();
    filterLangAllCities();
    });
    });






      function filterLangAllCities()
    {
    var country_id = $('#country_id').val();
    if (country_id != ''){
    $.post("{{ route('filter.lang.states.dropdown.all.cities') }}", {country_id: country_id, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#city_dd').html(response);

            });
    }
    }
function initdatepicker(){
	$(".datepicker").datepicker({
		autoclose: true,
		format:'yyyy-m-d'
	});
}
</script>
@endpush
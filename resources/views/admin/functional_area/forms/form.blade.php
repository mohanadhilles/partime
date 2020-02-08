<?php
$lang = config('default_lang');
if (isset($functionalArea))
    $lang = $functionalArea->lang;
$lang = MiscHelper::getLang($lang);
$direction = MiscHelper::getLangDirection($lang);
$queryString = MiscHelper::getLangQueryStr();
?>
{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'lang') !!}">
        {!! Form::label('lang', 'Language', ['class' => 'bold']) !!}                    
        {!! Form::select('lang', ['' => 'Select Language']+$languages, $lang, array('class'=>'form-control', 'id'=>'lang', 'onchange'=>'setLang(this.value)')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'lang') !!}                                       
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'functional_area') !!}">
        {!! Form::label('functional_area', 'Functional Area', ['class' => 'bold']) !!}
        {!! Form::text('functional_area', null, array('class'=>'form-control', 'id'=>'functional_area', 'placeholder'=>'Functional Area', 'dir'=>$direction)) !!}
        {!! APFrmErrHelp::showErrors($errors, 'functional_area') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'is_default') !!}">
        {!! Form::label('is_default', 'Is Default?', ['class' => 'bold']) !!}
        <div class="radio-list">
            <?php
            $is_default_1 = 'checked="checked"';
            $is_default_2 = '';
            if (old('is_default', ((isset($functionalArea)) ? $functionalArea->is_default : 1)) == 0) {
                $is_default_1 = '';
                $is_default_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="default" name="is_default" type="radio" value="1" {{$is_default_1}} onchange="showHideFunctionalAreaId();">
                Yes </label>
            <label class="radio-inline">
                <input id="not_default" name="is_default" type="radio" value="0" {{$is_default_2}} onchange="showHideFunctionalAreaId();">
                No </label>
        </div>
        {!! APFrmErrHelp::showErrors($errors, 'is_default') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'functional_area_id') !!}" id="functional_area_id_div">
        {!! Form::label('functional_area_id', 'Default Functional Area', ['class' => 'bold']) !!}                    
        {!! Form::select('functional_area_id', ['' => 'Select Default Functional Area']+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'functional_area_id') !!}                                       
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'is_active') !!}">
        {!! Form::label('is_active', 'Active', ['class' => 'bold']) !!}
        <div class="radio-list">
            <?php
            $is_active_1 = 'checked="checked"';
            $is_active_2 = '';
            if (old('is_active', ((isset($functionalArea)) ? $functionalArea->is_active : 1)) == 0) {
                $is_active_1 = '';
                $is_active_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="active" name="is_active" type="radio" value="1" {{$is_active_1}}>
                Active </label>
            <label class="radio-inline">
                <input id="not_active" name="is_active" type="radio" value="0" {{$is_active_2}}>
                In-Active </label>
        </div>
        {!! APFrmErrHelp::showErrors($errors, 'is_active') !!}
    </div>


             <div class="form-group {!! APFrmErrHelp::hasError($errors, 'count_jobs') !!}">
        {!! Form::label('count_jobs', 'count jobs', ['class' => 'bold']) !!}
        {!! Form::number('count_jobs', null, array('class'=>'form-control', 'id'=>'count_jobs', 'placeholder'=>'count jobs', 'dir'=>$direction)) !!}
        {!! APFrmErrHelp::showErrors($errors, 'count_jobs') !!}
    </div>

                 <div class="form-group {!! APFrmErrHelp::hasError($errors, 'range_price_from') !!}">
        {!! Form::label('range_price_from', 'range price from', ['class' => 'bold']) !!}
        {!! Form::number('range_price_from', null, array('class'=>'form-control', 'id'=>'range_price_from', 'placeholder'=>'range price from', 'dir'=>$direction)) !!}
        {!! APFrmErrHelp::showErrors($errors, 'range_price_from') !!}
    </div>

                 <div class="form-group {!! APFrmErrHelp::hasError($errors, 'range_price_to') !!}">
        {!! Form::label('range_price_to', 'range price to', ['class' => 'bold']) !!}
        {!! Form::number('range_price_to', null, array('class'=>'form-control', 'id'=>'range_price_to', 'placeholder'=>'range price to', 'dir'=>$direction)) !!}
        {!! APFrmErrHelp::showErrors($errors, 'range_price_to') !!}
    </div>

                     <div class="form-group {!! APFrmErrHelp::hasError($errors, 'average_partime_cost') !!}">
        {!! Form::label('average_partime_cost', 'Average partime cost par hour', ['class' => 'bold']) !!}
        {!! Form::number('average_partime_cost', null, array('class'=>'form-control', 'id'=>'average_partime_cost', 'placeholder'=>'Average partime cost par hour', 'dir'=>$direction)) !!}
        {!! APFrmErrHelp::showErrors($errors, 'average_partime_cost') !!}
    </div>



        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'show_in_home') !!}">
        {!! Form::label('show_in_home', 'show in home?', ['class' => 'bold']) !!}
        <div class="radio-list">
            <?php
            $show_in_home_1 = 'checked="checked"';
            $show_in_home_2 = '';
            if (old('show_in_home', ((isset($functionalArea)) ? $functionalArea->show_in_home : 1)) == 0) {
                $show_in_home_1 = '';
                $show_in_home_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="show_in_home" name="show_in_home" type="radio" value="1" {{$show_in_home_1}}  >
                Yes </label>
            <label class="radio-inline">
                <input id="not_show_in_home" name="show_in_home" type="radio" value="0" {{$show_in_home_2}}  >
                No </label>
        </div>
        {!! APFrmErrHelp::showErrors($errors, 'show_in_home') !!}
    </div>


        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'show_in_jobs') !!}">
        {!! Form::label('show_in_jobs', 'show in jobs?', ['class' => 'bold']) !!}
        <div class="radio-list">
            <?php
            $show_in_jobs_1 = 'checked="checked"';
            $show_in_jobs_2 = '';
            if (old('is_default', ((isset($functionalArea)) ? $functionalArea->show_in_jobs : 1)) == 0) {
                $show_in_jobs_1 = '';
                $show_in_jobs_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="show_in_jobs" name="show_in_jobs" type="radio" value="1" {{$show_in_jobs_1}}  >
                Yes </label>
            <label class="radio-inline">
                <input id="not_show_in_jobs" name="show_in_jobs" type="radio" value="0" {{$show_in_jobs_2}}  >
                No </label>
        </div>
        {!! APFrmErrHelp::showErrors($errors, 'show_in_jobs') !!}
    </div>


    <div class="form-actions">
        {!! Form::button('Update <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>', array('class'=>'btn btn-large btn-primary', 'type'=>'submit')) !!}
    </div>
</div>
@push('scripts')
<script type="text/javascript">
    function setLang(lang) {
        window.location.href = "<?php echo url(Request::url()) . $queryString; ?>" + lang;
    }
    function showHideFunctionalAreaId() {
        $('#functional_area_id_div').hide();
        var is_default = $("input[name='is_default']:checked").val();
        if (is_default == 0) {
            $('#functional_area_id_div').show();
        }
    }
    showHideFunctionalAreaId();
</script>
@endpush
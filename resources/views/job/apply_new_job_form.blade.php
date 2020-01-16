
@extends('layouts.app')



@section('content')

<!-- Header start -->

@include('includes.header')

<!-- Header end -->



<!-- Inner Page Title start -->

@include('includes.inner_page_title', ['page_title'=>__('New Job Application')])

<!-- Inner Page Title end -->



<div class="listpgWraper">

  <div class="container"> @include('flash::message')

    <div class="row">

      @include('includes.user_dashboard_menu')



      <div class="col-md-9 col-sm-8">

           <div class="myads">
          <h3>{{__('New Job Application')}}</h3>




     
        <div class="userccount">
          <div class="formpanel"> {!! Form::open(array('method' => 'post', 'route' => ['new.apply.job'])) !!}
            <!-- Job Information -->
            <h5> {{__('New Job Application')}} </h5>
            <div class="row">

              <div class="col-md-6">
                <div class="formrow{{ $errors->has('current_salary') ? ' has-error' : '' }}">
                {!! Form::number('current_salary', null, array('class'=>'form-control', 'id'=>'current_salary', 'placeholder'=>__('Current salary') )) !!}
                  @if ($errors->has('current_salary')) <span class="help-block"> <strong>{{ $errors->first('current_salary') }}</strong> </span> @endif </div>
              </div>
              <div class="col-md-6">
                <div class="formrow{{ $errors->has('expected_salary') ? ' has-error' : '' }}">
                {!! Form::number('expected_salary', null, array('class'=>'form-control', 'id'=>'expected_salary', 'placeholder'=>__('Expected salary'))) !!}
                  @if ($errors->has('expected_salary')) <span class="help-block"> <strong>{{ $errors->first('expected_salary') }}</strong> </span> @endif </div>
              </div>
              <div class="col-md-12">
                <div class="formrow{{ $errors->has('salary_currency') ? ' has-error' : '' }}"> {!! Form::text('salary_currency', Request::get('salary_currency', $siteSetting->default_currency_code), array('class'=>'form-control', 'id'=>'salary_currency', 'placeholder'=>__('Salary Currency'), 'autocomplete'=>'off')) !!}
                  @if ($errors->has('salary_currency')) <span class="help-block"> <strong>{{ $errors->first('salary_currency') }}</strong> </span> @endif </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="{{__('Apply on Job')}}">
            {!! Form::close() !!} </div>
        </div>
      </div>


      </div>

    </div>

  </div>

</div>



@include('includes.footer')

@endsection

@push('scripts')

@include('includes.immediate_available_btn')

@endpush








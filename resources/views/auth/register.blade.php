@extends('layouts.webapp')

@section('guest')
<?php $c_or_e = old('candidate_or_employer', 'candidate');      ?>
<section  class="features-section" >
<div class="container">
     <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link {{($c_or_e == 'candidate')? 'active':''}}" data-toggle="tab" href="#home">{{ __('Candidate') }} </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{($c_or_e == 'employer')? 'active':''}}" data-toggle="tab" href="#menu1">{{ __('Employer') }}</a>
    </li>
  </ul>
     <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane {{($c_or_e == 'candidate')? 'active':''}}"><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Candidate') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Candidate') }}">
                        @csrf
                         <input type="hidden" name="candidate_or_employer" value="candidate" />
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" placeholder="{{ __('First Name') }}" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} text-right" name="first_name" value="{{ old('first_name') }}"required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                           <div class="form-group row">
                            <label for="middle_name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" placeholder="{{ __('Middle Name') }}"class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }} text-right" name="middle_name" value="{{ old('middle_name') }}"required autofocus>

                                @if ($errors->has('middle_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                                                <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" placeholder="{{ __('Last Name') }}" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} text-right" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}"
                                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-right" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-right" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control text-right " name="password_confirmation" required>
                            </div>
                        </div>


                              <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms_of_use" id="terms_of_use" {{ old('terms_of_use') ? 'checked' : '' }} required>
                                           @if ($errors->has('terms_of_use'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('terms_of_use') }}</strong>
                                    </span>
                                @endif
                                    <label class="form-check-label" for="terms_of_use">
                                        {{ __('I accept Terms of Use') }}
                                    </label>

                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>

                        <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Have Account')}}? <a href="{{route('login')}}">{{__('Sign in')}}</a></div>
          <!-- sign up form end-->
                </div>
            </div>
        </div>
    </div>
    </div>
      <div id="menu1" class="container tab-pane  {{($c_or_e == 'employer')? 'active':''}}"><br>

       <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('company.register') }}" aria-label="{{ __('Employer') }}">
                        @csrf
                      <input type="hidden" name="candidate_or_employer" value="employer" />
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CompanyName') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="{{ __('CompanyName') }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} text-right" name="name" value="{{ old('name') }}"required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>







                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}"
                                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-right" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-right" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="{{ __('Confirm Password') }}" type="password" class="form-control text-right " name="password_confirmation" required>
                            </div>
                        </div>


                             <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms_of_use" id="terms_of_use" {{ old('terms_of_use') ? 'checked' : '' }} required>
                                               @if ($errors->has('terms_of_use'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('terms_of_use') }}</strong>
                                    </span>
                                @endif
                                    <label class="form-check-label" for="terms_of_use">
                                        {{ __('I accept Terms of Use') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>

                        <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Have Account')}}? <a href="{{route('login')}}">{{__('Sign in')}}</a></div>
          <!-- sign up form end-->
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>
</section>
@endsection

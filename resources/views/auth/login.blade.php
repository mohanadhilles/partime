@extends('layouts.webapp')

@section('content')
<!--   <a href="{{ url('login/jobseeker/linkedin')}}" class="btn btn-info"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
--><?php $c_or_e = old('candidate_or_employer', 'candidate');  ?>
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
                <div class="card-header">{{ __('Candidate') }}      </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Candidate') }}">
                        @csrf
                         <input type="hidden" name="candidate_or_employer" value="candidate" />
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-right"   name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link text-right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password') }}
                                </a>
                            </div>
                        </div>
                    </form>

                    <hr>


                              <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('New User')}}? <a href="{{route('register')}}">{{__('Register Here')}}</a></div>
           <!-- sign up form end-->
                </div>
            </div>
        </div>
    </div>

    </div>
    <div id="menu1" class="container tab-pane fade {{($c_or_e == 'employer')? 'active':''}}"><br>
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Employer') }}      </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('company.login') }}" aria-label="{{ __('Employer') }}">
                        @csrf
                         <input type="hidden" name="candidate_or_employer" value="employer" />
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-right"   name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link text-right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password') }}
                                </a>
                            </div>
                        </div>
                    </form>

                    <hr>


                              <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('New User')}}? <a href="{{route('register')}}">{{__('Register Here')}}</a></div>
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

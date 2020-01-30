@extends('layouts.webapp')
@section('guest')
  <?php $c_or_e = old('candidate_or_employer', 'candidate');    ?>

    <link href="{{asset('tamplate/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('tamplate/dest/style.css')}}" rel="stylesheet">

    <div class="container py-md-5" >
        <div class="row py-md-5">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card-group ">
                    <div class="card p-a-2">
                        <div class="card-block">
                            <h2>{{ __('Register') }}   </h2>

                              <form method="POST" id="login_form" action="/register" aria-label="{{ __('Candidate') }}">
                              <div class="form-check text-muted">
   <input class="form-check-input" type="radio" name="candidate_or_employer"
   checked="checked" {{($c_or_e == 'candidate')? 'checked="checked"':''}}  value="candidate" />&nbsp; &nbsp;&nbsp;

  <label class="form-check-label" for="candidate_or_employer">
 {{ __('Candidate') }}
  </label>
</div>

                              <div class="form-check text-muted ">
   <input class="form-check-input" type="radio" name="candidate_or_employer"
   {{($c_or_e == 'employer')? 'checked="checked"':''}}  value="employer" />&nbsp; &nbsp;&nbsp;

  <label class="form-check-label" for="candidate_or_employer">
 {{ __('Employer') }}
  </label>
</div>



                        @csrf

                           <div class="input-group m-b-1 employer">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                         <input id="name" type="text" placeholder="{{ __('CompanyName') }}" class="form-control employer ar {{ $errors->has('name') ? ' is-invalid' : '' }} text-right"   name="name" value="{{ old('name') }}"   autofocus>

                          @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                         </div>


                                  <div class="input-group m-b-1 candidate">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                         <input id="first_name" type="text" placeholder="{{ __('First Name') }}" class="form-control candidate ar {{ $errors->has('first_name') ? ' is-invalid' : '' }} text-right"   name="first_name" value="{{ old('first_name') }}"   autofocus>

                          @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                         </div>


                                  <div class="input-group m-b-1 candidate">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                         <input id="middle_name" type="text" placeholder="{{ __('Middle Name') }}" class="form-control candidate ar {{ $errors->has('middle_name') ? ' is-invalid' : '' }} text-right"   name="middle_name" value="{{ old('middle_name') }}"   autofocus>

                          @if ($errors->has('middle_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                         </div>


                                  <div class="input-group m-b-1 candidate">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                         <input id="last_name" type="text" placeholder="{{ __('Last Name') }}" class="form-control candidate ar {{ $errors->has('last_name') ? ' is-invalid' : '' }} text-right"   name="last_name" value="{{ old('last_name') }}"  autofocus>

                          @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                         </div>



                             <div class="input-group m-b-1">
                                <span class="input-group-addon">@
                                </span>
                         <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control ar {{ $errors->has('email') ? ' is-invalid' : '' }} text-right"   name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                         </div>
                            <div class="input-group m-b-2">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                 <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control ar {{ $errors->has('password') ? ' is-invalid' : '' }} text-right" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                               <div class="input-group m-b-2">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                 <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="form-control ar {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }} text-right" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>


                               <div class="input-group m-b-2">
                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="terms_of_use" id="terms_of_use" {{ old('terms_of_use') ? 'checked' : '' }} required>
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


                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <button type="submit" class="btn btn-primary p-x-2">
                                        <i class="icon-login"></i>
                                         {{ __('Register') }}  </button>
                                </div>
                                <div class="col-xs-12 col-md-6  ">

                                    <a href="{{ route('login') }}" class="btn btn-link p-x-0"> &nbsp;{{__('Have Account')}}? {{__('Sign in')}} &nbsp;  </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary p-y-3"  >
                        <div class="card-block text-xs-center">
                            <div>
                                <h2>{{__('Have Account')}}? </h2>
                                <p> {{__('Join Parttime Partner app partners close to your career and get additional income')}} </p>
                                <a  href="{{route('login')}}"   class="btn btn-primary active m-t-1"> {{__('Sign in')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
 @if($c_or_e == 'candidate')
<script>
$("#login_form").attr('action', '/register');
$("input[name='email']").attr('placeholder', '{{__("Candidate E-Mail Address")}}');


  $("input[name='name']").attr('required', false);

  $("input[name='first_name']").attr('required', true);
  $("input[name='middle_name']").attr('required', true);
  $("input[name='last_name']").attr('required', true);

$(".candidate").show();
$(".employer").hide();

 </script>
 @else
 <script>
  $("#login_form").attr('action', '/company/register');
  $("input[name='email']").attr('placeholder', '{{__("Employer E-Mail Address")}}');


     $("input[name='name']").attr('required', true);

  $("input[name='first_name']").attr('required', false);
  $("input[name='middle_name']").attr('required', false);
  $("input[name='last_name']").attr('required', false);




   $(".candidate").hide();
$(".employer").show();

   </script>
 @endif
<script>

            $(function(){
            $('input:radio[name="candidate_or_employer"]').change(function() {
            if(this.value == "candidate") {
            $("#login_form").attr('action', '/register');
            $("input[name='email']").attr('placeholder', '{{__("Candidate E-Mail Address")}}');
            $(".candidate").show();
            $(".employer").hide();
            $("input[name='name']").attr('required', false);

            $("input[name='first_name']").attr('required', true);
            $("input[name='middle_name']").attr('required', true);
            $("input[name='last_name']").attr('required', true);
            }   else {
            $("#login_form").attr('action', '/company/register');
            $("input[name='email']").attr('placeholder', '{{__("Employer E-Mail Address")}}');
            $(".candidate").hide();
            $(".employer").show();

            $("input[name='name']").attr('required', true);

            $("input[name='first_name']").attr('required', false);
            $("input[name='middle_name']").attr('required', false);
            $("input[name='last_name']").attr('required', false);
            }
            });
            });
</script>
@endpush




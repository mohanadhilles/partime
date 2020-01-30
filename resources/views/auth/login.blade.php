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
                            <h2>{{ __('Login') }}   </h2>

                              <form method="POST" id="login_form" action="/login" aria-label="{{ __('Candidate') }}">
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
                             <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-user"></i>
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

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                        </div>


                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <button type="submit" class="btn btn-primary p-x-2">
                                        <i class="icon-login"></i>
                                         {{ __('Login') }}  </button>
                                </div>
                                <div class="col-xs-12 col-md-6  ">
                                    <a href="{{ route('password.request') }}" class="btn btn-link p-x-0"> &nbsp;&nbsp;{{ __('Forgot Your Password') }} &nbsp;&nbsp; </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-inverse card-primary p-y-3"  >
                        <div class="card-block text-xs-center">
                            <div>
                                <h2>{{__('New User')}} ؟ </h2>
                                <p> {{__('Join Parttime Partner app partners close to your career and get additional income')}} </p>
                                <a  href="{{route('register')}}"   class="btn btn-primary active m-t-1"> {{__('Register Here')}}</a>
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
$("#login_form").attr('action', '/login');
$("input[name='email']").attr('placeholder', '{{__("Candidate E-Mail Address")}}');
 </script>
 @else
 <script>
  $("#login_form").attr('action', '/company/login');
  $("input[name='email']").attr('placeholder', '{{__("Employer E-Mail Address")}}');
   </script>
 @endif
<script>

$(function(){
    $('input:radio[name="candidate_or_employer"]').change(function() {
        if(this.value == "candidate") {
          $("#login_form").attr('action', '/login');
          $("input[name='email']").attr('placeholder', '{{__("Candidate E-Mail Address")}}');
        }   else {
         $("#login_form").attr('action', '/company/login');
           $("input[name='email']").attr('placeholder', '{{__("Employer E-Mail Address")}}'); 
        }
    });
});
</script>
@endpush




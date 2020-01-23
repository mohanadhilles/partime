<?php

namespace App\Http\Controllers\Company\Auth;

use Auth;
use App\Company;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;
use App\Http\Requests\Front\CompanyFrontRegisterFormRequest;
use Illuminate\Auth\Events\Registered;
use App\Events\CompanyRegistered;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;
use VerifiesUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/company-home';
	protected $userTable = 'companies';
	protected $redirectIfVerified = '/company-home';
	protected $redirectAfterVerification = '/company-home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company.guest', ['except' => ['getVerification','getVerificationError']]);
    }


    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('company');
    }
	
	public function register(CompanyFrontRegisterFormRequest $request)
    {
        $company = new Company();
        $company->name = $request->input('name');
		$company->email = $request->input('email');
        $company->password = bcrypt($request->input('password'));
        $company->is_active = 1;
        $company->verified = 1;
        $company->save();		
		/***********************/
		$company->slug = str_slug($company->name, '-').'-'.$company->id;
		$company->update();
		/***********************/




		$now = Carbon::now();
		$company->package_id = 6;
		$company->package_start_date = $now;
		$company->package_end_date = $now->addDays(360);
		$company->jobs_quota = 1000;
		$company->availed_jobs_quota = 0;
		$company->update();

		
      //  event(new Registered($company));
	   //	event(new CompanyRegistered($company));
        $this->guard()->login($company);
      //  UserVerification::generate($company);
       // UserVerification::send($company, 'Company Verification', config('mail.recieve_to.address'), config('mail.recieve_to.name'));
        return $this->registered($request, $company) ?: redirect($this->redirectPath());
    }

}

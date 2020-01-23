<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Input;
use File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use ImgUploader;
use Carbon\Carbon;
use Redirect;
use App\User;
use App\ApplicantMessage;
use App\Payslip;
use App\Payroll;
use App\ProfileExperience;
use App\ProfileEducation;
use App\SiteSetting;
use App\Ticket;
use App\Company;
use App\FavouriteCompany;
use App\Gender;

use App\MaritalStatus;
use App\Country;
use App\State;
use App\City;
use App\JobExperience;
use App\JobApply;
use App\Contract;
use App\CareerLevel;
use App\Industry;
use App\Order;
use App\FunctionalArea;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Traits\CommonUserFunctions;
use App\Traits\ProfileSummaryTrait;
use App\Traits\ProfileCvsTrait;
use App\Traits\ProfileProjectsTrait;
use App\Traits\ProfileExperienceTrait;
use App\Traits\ProfileEducationTrait;
use App\Traits\ProfileSkillTrait;
use App\Traits\ProfileLanguageTrait;

use App\Traits\UserTicketTrait;
use App\Traits\UserOrderTrait;
use App\Traits\UserOfferTrait;
use App\Traits\UserBankAccountTrait;
 use App\ProfileLanguage;
use App\Traits\Skills;
use App\Http\Requests\Front\UserFrontFormRequest;

use App\Helpers\DataArrayHelper;

class UserController extends Controller
{

    use CommonUserFunctions;
	use ProfileSummaryTrait;
	use ProfileCvsTrait;
	use UserTicketTrait;
	use UserOrderTrait;
	use UserOfferTrait;
	use UserBankAccountTrait;
	use ProfileProjectsTrait;
	use ProfileExperienceTrait;
	use ProfileEducationTrait;
	use ProfileSkillTrait;
	use ProfileLanguageTrait;
	use Skills;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth', ['only' => ['myProfile', 'updateMyProfile', 'viewPublicProfile']]);
		$this->middleware('auth', ['except' => ['showApplicantProfileEducation', 'showApplicantProfileProjects', 'showApplicantProfileExperience', 'showApplicantProfileSkills', 'showApplicantProfileLanguages']]);
    }

	public function viewPublicProfile($id)
    {

		$user = User::findOrFail($id);
		$profileCv = $user->getDefaultCv();

		return view('user.applicant_profile')
                        ->with('user', $user)
                        ->with('profileCv', $profileCv)
						->with('page_title', $user->getName())
						->with('form_title', 'Contact '.$user->getName());
    }

	public function myProfile()
    {
        $genders = DataArrayHelper::langGendersArray();
        $maritalStatuses = DataArrayHelper::langMaritalStatusesArray();
        $nationalities = DataArrayHelper::langNationalitiesArray();
		$countries = DataArrayHelper::langCountriesArray();
		$jobExperiences = DataArrayHelper::langJobExperiencesArray();
		$careerLevels = DataArrayHelper::langCareerLevelsArray();
		$industries = DataArrayHelper::langIndustriesArray();
		$functionalAreas = DataArrayHelper::langFunctionalAreasArray();
		$degreeLevels = DataArrayHelper::langDegreeLevelsArray();
        $languageLevels = DataArrayHelper::langLanguageLevelsArray();
        $jobShifts = DataArrayHelper::langJobShiftsArray();
        $malls = DataArrayHelper::langMallsArray();
        $workTimes = DataArrayHelper::langWorkTimesArray();

        $ask = [0 => 'لا' , 1 => 'نعم'];

        $siteSetting = SiteSetting::first();

		$upload_max_filesize = UploadedFile::getMaxFilesize() / (1048576);

        $user = User::findOrFail(Auth::user()->id);
        $profileLanguages = $user->profileLanguages;



           $ProfileExperience = ProfileExperience::orderby('id','DESC')->whereUserId($user->id)->first();
        $last_job_position = (isset($ProfileExperience->id)) ? $ProfileExperience->title:NULL ;
        $is_currently_working = (isset($ProfileExperience->id)) ? $ProfileExperience->is_currently_working:NULL ;
        $company = (isset($ProfileExperience->id)) ? $ProfileExperience->company:NULL ;
        $description = (isset($ProfileExperience->id)) ? $ProfileExperience->description:NULL ;
        $time_from = (isset($ProfileExperience->id)) ? $ProfileExperience->time_from:NULL ;
        $time_to = (isset($ProfileExperience->id)) ? $ProfileExperience->time_to:NULL ;
        $mall_id = (isset($ProfileExperience->id)) ? $ProfileExperience->mall_id:NULL ;


           $ProfileEducation = ProfileEducation::whereUserId($user->id)->first();
        $degree_level_id = (isset($ProfileEducation->id)) ? $ProfileEducation->degree_level_id:NULL ;

               $ProfileLanguage = ProfileLanguage::whereUserId($user->id)->whereLanguageId(44)->first();
        $language_level_id = (isset($ProfileLanguage->id)) ? $ProfileLanguage->language_level_id:NULL ;

        $country_id = (isset($user->country_id) && $user->country_id != NULL) ? $user->country_id: $siteSetting->default_country_id;
                $cities = DataArrayHelper::AllCitiesArray($country_id);


           $user->last_job_position = $last_job_position;
           $user->is_currently_working = $is_currently_working;
           $user->company = $company;
           $user->description = $description;
           $user->time_to = $time_to;
           $user->time_from = $time_from;
           $user->mall_id = $mall_id;
        return view('user.edit_profile')
                         ->with('languageLevels', $languageLevels)
                        ->with('language_level_id', $language_level_id)
                        ->with('cities', $cities)
                        ->with('ask', $ask)
                        ->with('degree_level_id', $degree_level_id)
                        ->with('malls', $malls)
                        ->with('workTimes', $workTimes)
                        ->with('jobShifts', $jobShifts)
                        ->with('genders', $genders)
                        ->with('degreeLevels', $degreeLevels)
                        ->with('maritalStatuses', $maritalStatuses)
                        ->with('nationalities', $nationalities)
                        ->with('countries', $countries)
                        ->with('jobExperiences', $jobExperiences)
                        ->with('careerLevels', $careerLevels)
                        ->with('industries', $industries)
                        ->with('functionalAreas', $functionalAreas)
                        ->with('user', $user)
						->with('upload_max_filesize', $upload_max_filesize);
    }

    public function updateMyProfile(UserFrontFormRequest $request)
    {

         // dd($request->all());
        $user = User::findOrFail(Auth::user()->id);
        /*         * **************************************** */
        if ($request->hasFile('image')) {
            $is_deleted = $this->deleteUserImage($user->id);
            $image = $request->file('image');
            $fileName = ImgUploader::UploadImage('user_images', $image, $request->input('name'), 300, 300, false);
            $user->image = $fileName;
        }
        /*         * ************************************** */

        $user->first_name = $request->input('first_name');
        $user->middle_name = $request->input('middle_name');
        $user->last_name = $request->input('last_name');
		/**************************/
		$user->name = $user->getName();
		/**************************/
        $user->email = $request->input('email');

        if (!empty($request->input('password'))) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->father_name = $request->input('father_name');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender_id = $request->input('gender_id');
        $user->marital_status_id = $request->input('marital_status_id');
        $user->nationality_id = $request->input('nationality_id');
        $user->national_id_card_number = $request->input('national_id_card_number');
        $user->country_id = $request->input('country_id');

    $user->city_id = $request->input('city_id');

    $city = City::find($request->input('city_id'));

     $user->state_id = (isset($city) && isset($city->state_id)) ? $city->state_id : NULL;

        $user->phone = $request->input('phone');
        $user->mobile_num = $request->input('mobile_num');
        $user->neighborhood = $request->input('neighborhood');
        //$user->degree_level_id = $request->input('degree_level_id');
        $user->job_experience_id = $request->input('job_experience_id');
        $user->career_level_id = $request->input('career_level_id');
        $user->industry_id = $request->input('industry_id');
        $user->functional_area_id = $request->input('functional_area_id');
        $user->current_salary = $request->input('current_salary');
        $user->expected_salary = $request->input('expected_salary');
        $user->salary_currency = $request->input('salary_currency');
        $user->street_address = $request->input('street_address');
        $user->linkedin_link = $request->input('linkedin_link');
        $user->appropriate_work_time_id = $request->input('appropriate_work_time_id');
        $user->work_time_id = $request->input('work_time_id');
           $user->have_you_a_car = $request->input('have_you_a_car');
        $user->have_you_computer = $request->input('have_you_computer');

         if($request->apply_job == 1){
             $order = new Order();
        $order->user_id = $user->id;
        $order->is_immediate_available = $user->is_immediate_available;
        $order->appropriate_work_time_id = $user->appropriate_work_time_id;
        $order->work_time_id = $user->work_time_id;

        $order->appropriate_work_time_from_1 = $request->input('appropriate_work_time_from_1');
        $order->appropriate_work_time_from_2 = $request->input('appropriate_work_time_from_2');
        $order->appropriate_work_time_from_3 = $request->input('appropriate_work_time_from_3');
        $order->appropriate_work_time_to_1 = $request->input('appropriate_work_time_to_1');
        $order->appropriate_work_time_to_2 = $request->input('appropriate_work_time_to_2');
        $order->appropriate_work_time_to_3 = $request->input('appropriate_work_time_to_3');
        $order->expected_join_date = $request->input('expected_join_date');
        $order->interested_job = $request->input('interested_job');
        $order->current_salary = $request->input('current_salary');
        $order->expected_salary = $request->input('expected_salary');
        $order->salary_currency = $request->input('salary_currency');
        $order->notes = $request->input('notes');
        $order->save();

        $user->appropriate_work_time_from_1 = $request->input('appropriate_work_time_from_1');
        $user->appropriate_work_time_from_2 = $request->input('appropriate_work_time_from_2');
        $user->appropriate_work_time_from_3 = $request->input('appropriate_work_time_from_3');
        $user->appropriate_work_time_to_1 = $request->input('appropriate_work_time_to_1');
        $user->appropriate_work_time_to_2 = $request->input('appropriate_work_time_to_2');
        $user->appropriate_work_time_to_3 = $request->input('appropriate_work_time_to_3');
        $user->expected_join_date = $request->input('expected_join_date');
        $user->interested_job = $request->input('interested_job');
        $user->notes = $request->input('notes');

        }


        $user->update();


        $ProfileEducation = ProfileEducation::whereUserId($user->id)->first();

        if(!isset($ProfileEducation->id)){
        $ProfileEducation = new ProfileEducation();
		$ProfileEducation->user_id = $user->id;
		$ProfileEducation->degree_level_id =  $request->input('degree_level_id');
        $ProfileEducation->country_id = $user->country_id;
        $ProfileEducation->city_id = $user->city_id;
        $ProfileEducation->state_id = $user->state_id;
        $ProfileEducation->save();
        }else{
         $ProfileEducation->degree_level_id =  $request->input('degree_level_id');
        $ProfileEducation->country_id = $user->country_id;
        $ProfileEducation->city_id = $user->city_id;
        $ProfileEducation->state_id = $user->state_id;
        $ProfileEducation->update();
        }


        $ProfileLanguage = ProfileLanguage::whereUserId($user->id)->whereLanguageId(44)->first();

        if(!isset($ProfileLanguage->id)){
        $ProfileLanguage = new ProfileLanguage();
		$ProfileLanguage->user_id = $user->id;
		$ProfileLanguage->language_level_id =  $request->input('language_level_id');
        $ProfileLanguage->language_id = 44;
          $ProfileLanguage->save();
        }else{
         $ProfileLanguage->language_level_id =  $request->input('language_level_id');
        $ProfileLanguage->language_id = 44;
          $ProfileLanguage->update();
        }

         $ProfileExperience  = ProfileExperience::orderby('id','DESC')->whereUserId($user->id)->first();

        if(!isset($ProfileExperience->id)){
           $ProfileExperience = new ProfileExperience();
		$ProfileExperience->user_id = $user->id;
		$ProfileExperience->title =  $request->input('last_job_position');
 		$ProfileExperience->description =  $request->input('description');
 		$ProfileExperience->time_from =  $request->input('time_from');
 		$ProfileExperience->time_to =  $request->input('time_to');
		$ProfileExperience->is_currently_working =  $request->input('is_currently_working');
		$ProfileExperience->company =  $request->input('company');
		$ProfileExperience->mall_id =  $request->input('mall_id');
         $ProfileExperience->country_id = $user->country_id;
        $ProfileExperience->city_id = $user->city_id;
        $ProfileExperience->state_id = $user->state_id;
          $ProfileExperience->save();
         }else{

         if($request->input('last_job_position') != NULL){$ProfileExperience->title =  $request->input('last_job_position'); }
         if($request->input('description') != NULL){$ProfileExperience->description =  $request->input('description'); }
         if($request->input('is_currently_working') != NULL){$ProfileExperience->is_currently_working =  $request->input('is_currently_working'); }
         if($request->input('company') != NULL){$ProfileExperience->company =  $request->input('company'); }
         if($request->input('mall_id') != NULL){$ProfileExperience->mall_id =  $request->input('mall_id'); }
         if($request->input('time_from') != NULL){$ProfileExperience->time_from =  $request->input('time_from'); }
         if($request->input('time_to') != NULL){$ProfileExperience->time_to =  $request->input('time_to'); }


        $ProfileExperience->update();
        }


		$this->updateUserFullTextSearch($user);

        if($request->apply_job == 1){
     flash(__('You have apply_job successfully'))->success();
        }   else {
     flash(__('You have updated your profile successfully'))->success();
        }
        return back();
    }

	public function addToFavouriteCompany(Request $request, $company_slug)
    {
		$data['company_slug'] = $company_slug;
        $data['user_id'] = Auth::user()->id;
        $data_save = FavouriteCompany::create($data);
		flash(__('Company has been added in favorites list'))->success();
        return \Redirect::route('company.detail', $company_slug);
    }

    public function removeFromFavouriteCompany(Request $request, $company_slug)
    {
		$user_id = Auth::user()->id;
        FavouriteCompany::where('company_slug', 'like', $company_slug)->where('user_id', $user_id)->delete();

		flash(__('Company has been removed from favorites list'))->success();
        return \Redirect::route('company.detail', $company_slug);
    }

	public function myFollowings()
    {
        $user = User::findOrFail(Auth::user()->id);
		$companiesSlugArray = $user->getFollowingCompaniesSlugArray();
		$companies = Company::whereIn('slug', $companiesSlugArray)->get();

		return view('user.following_companies')
                        ->with('user', $user)
						->with('companies', $companies);
    }

	public function myMessages()
    {
        $user = User::findOrFail(Auth::user()->id);
		$messages = ApplicantMessage::where('user_id', '=', $user->id)
						->orderBy('is_read', 'asc')
						->orderBy('created_at', 'desc')
						->get();

		return view('user.applicant_messages')
                        ->with('user', $user)
						->with('messages', $messages);
    }


  	public function myBankAccounts()
    {
        $user = User::findOrFail(Auth::user()->id);
		$bank_accounts = BankAccount::where('user_id', '=', $user->id)

						->orderBy('created_at', 'desc')
						->get();

		return view('user.bank_accounts')

						->with('bank_accounts', $bank_accounts);
    }


  	public function myContracts()
    {
        $user = User::findOrFail(Auth::user()->id);
		$contracts = Contract::select('contracts.*'
        ,'jobs.title as job_title'
        ,'contract_statuses.contract_status'
        ,'contract_statuses.code as color_code'
        ,'companies.name as company_name')->
        where('contracts.user_id', '=', $user->id)
          ->join('companies' , 'companies.id' , '=' ,'contracts.company_id')
          ->join('contract_statuses' , 'contract_statuses.contract_status_id' , '=' ,'contracts.contract_status_id')
           ->join('jobs' , 'jobs.id' , '=' ,'contracts.job_id')
						->orderBy('created_at', 'desc')
						->get();

		return view('user.contracts')
                        ->with('user', $user)
						->with('contracts', $contracts);
    }

      	public function myPayrolls()
    {
        $user = User::findOrFail(Auth::user()->id);
		$payrolls = Payslip::select('payslips.*'
        ,'jobs.title as job_title'
        ,'payslip_statuses.payslip_status'
        ,'companies.name as company_name')
        ->where('payslips.user_id', '=', $user->id)
        ->where('job_apply.user_id', '=', $user->id)
        ->join('payrolls' , 'payrolls.payroll_id' , '=' ,'payslips.payroll_id')
        ->join('companies' , 'companies.id' , '=' ,'payrolls.company_id')
        ->join('job_apply' , 'job_apply.job_id' , '=' ,'payslips.job_id')
        ->join('jobs' , 'jobs.id' , '=' ,'job_apply.job_id')
        ->join('payslip_statuses' , 'payslip_statuses.payslip_status_id' , '=' ,'payslips.payslip_status_id')
        ->where('payrolls.is_verified',1)
        ->where('payrolls.is_approved',1)
        ->where('payrolls.is_locked',1)
 						->get();

		return view('user.payrolls')
                        ->with('user', $user)
						->with('payrolls', $payrolls);
    }

 



	public function applicantMessageDetail($message_id)
    {
        $user = User::findOrFail(Auth::user()->id);
		$message = ApplicantMessage::findOrFail($message_id);
		$message->update(['is_read'=>1]);

		return view('user.applicant_message_detail')
                        ->with('user', $user)
						->with('message', $message);
    }



	public function showContract($id)
    {

		$contract = Contract::findOrFail($id);

		return view('user.contract')
                        ->with('contract', $contract)

                        ;
    }


}
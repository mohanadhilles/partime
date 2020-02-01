<?php
namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;



use Illuminate\Support\Facades\Hash;
use Illuminate\Http\UploadedFile;
use ImgUploader;
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
use App\Http\Requests\Front\OrderFrontFormRequest;
use App\Helpers\DataArrayHelper;


trait UserOrderTrait
{


       	public function indexOrder(Request $request)
    {
           $user = User::findOrFail(Auth::user()->id);
		$orders = Order::where('user_id', '=', $user->id)
 						->orderBy('created_at', 'desc')
						->get();
           	 //	$orders = Auth::guard('company')->user()->orders()->paginate(10);

		return view('user.orders')
                        ->with('user', $user)
						->with('orders', $orders);



    }


	public function createOrder()
    {

              $user = User::findOrFail(Auth::user()->id);
		$contracts = Contract::select('contracts.*'
        ,'jobs.title as job_title'
        ,'contract_statuses.contract_status'
        ,'contract_statuses.code as color_code'
        ,'companies.name as company_name')->
        where('contracts.user_id', '=', $user->id)
          ->join('companies' , 'companies.id' , '=' ,'contracts.company_id')
          ->join('
          ' , 'contract_statuses.contract_status_id' , '=' ,'contracts.contract_status_id')
           ->join('jobs' , 'jobs.id' , '=' ,'contracts.job_id')
						->orderBy('created_at', 'desc')
						->get()->toArray();


		$orderDepartments = DataArrayHelper::langorderDepartmentsArray();
		$orderStatuses = DataArrayHelper::langorderStatusesArray();
		$orderPriorites = DataArrayHelper::langorderPrioritesArray();
	  //	$contracts = DataArrayHelper::langContractArray(18);


        return view('user.add_edit_order')
                        ->with('orderDepartments', $orderDepartments)
                        ->with('orderStatuses', $orderStatuses)
                        ->with('orderPriorites', $orderPriorites)
                        ->with('contracts', $contracts)
        ;
    }

    public function storeFrontorder(orderFrontFormRequest $request)
    {
		$company = Auth::guard('company')->user();
		$contract = Contract::find($request->input('contract_id'));

        $order = new order();
        $order->id = $request->input('id');
        $order->company_id = $company->id;
        $order->contract_id = $contract->id;
        $order->employee_id = $contract->employee_id;
        $order->subject = $request->input('subject');
        $order->priority_id = $request->input('priority_id');
        $order->department_id = $request->input('department_id');
        $order->status_id = $request->input('status_id');
        $order->notes = $request->input('notes');
       // $order->user_id = $request->input('user_id');
      //  $order->responsible_id = $request->input('responsible_id');
      //  $order = $this->assignJobValues($order, $request);
		$order->save();

	   //	event(new JobPosted($order));

        flash('order has been added!')->success();
        return \Redirect::route('company.edit.front.order', array($order->id));
    }



    public function editFrontorder($id)
    {

         $order = order::select('orders.*'
        ,'users.first_name'
        , 'users.middle_name'
        , 'users.last_name'
          , 'users.email'  , 'users.father_name'  , 'users.date_of_birth'
          , 'users.gender_id'  , 'users.marital_status_id'  , 'users.nationality_id'  , 'users.national_id_card_number'  , 'users.country_id'
            , 'users.state_id'  , 'users.city_id'  , 'users.phone'  , 'users.mobile_num'  , 'users.job_experience_id'
              , 'users.career_level_id'  , 'users.industry_id'  , 'users.functional_area_id'  , 'users.street_address'   , 'users.linkedin_link'

                  , 'users.neighborhood'  , 'users.have_you_a_car'  , 'users.have_you_computer'

         )->
         leftjoin('users','users.id','=','orders.user_id')->
         findOrFail($id);



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

        $user = User::findOrFail($order->user_id);
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


           $order->last_job_position = $last_job_position;
           $order->is_currently_working = $is_currently_working;
           $order->company = $company;
           $order->description = $description;
           $order->time_to = $time_to;
           $order->time_from = $time_from;
           $order->mall_id = $mall_id;

        return view('order.add_edit_order')

                           ->with('order', $order)
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

						->with('upload_max_filesize', $upload_max_filesize);

        ;

    }

    public function updateFrontorder($id, OrderFrontFormRequest  $request)
    {

        $order = Order::findOrFail($id);

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


        $user->appropriate_work_time_from_1 = $request->input('appropriate_work_time_from_1');
        $user->appropriate_work_time_from_2 = $request->input('appropriate_work_time_from_2');
        $user->appropriate_work_time_from_3 = $request->input('appropriate_work_time_from_3');
        $user->appropriate_work_time_to_1 = $request->input('appropriate_work_time_to_1');
        $user->appropriate_work_time_to_2 = $request->input('appropriate_work_time_to_2');
        $user->appropriate_work_time_to_3 = $request->input('appropriate_work_time_to_3');
        $user->expected_join_date = $request->input('expected_join_date');
        $user->interested_job = $request->input('interested_job');
        $user->notes = $request->input('notes');

        


        $user->update();


        $ProfileEducation = ProfileEducation::whereUserId($user->id)->first();


         $ProfileEducation->degree_level_id =  $request->input('degree_level_id');
        $ProfileEducation->country_id = $user->country_id;
        $ProfileEducation->city_id = $user->city_id;
        $ProfileEducation->state_id = $user->state_id;
        $ProfileEducation->update();



        $ProfileLanguage = ProfileLanguage::whereUserId($user->id)->whereLanguageId(44)->first();


         $ProfileLanguage->language_level_id =  $request->input('language_level_id');
        $ProfileLanguage->language_id = 44;
          $ProfileLanguage->update();


         $ProfileExperience  = ProfileExperience::orderby('id','DESC')->whereUserId($user->id)->first();



         if($request->input('last_job_position') != NULL){$ProfileExperience->title =  $request->input('last_job_position'); }
         if($request->input('description') != NULL){$ProfileExperience->description =  $request->input('description'); }
         if($request->input('is_currently_working') != NULL){$ProfileExperience->is_currently_working =  $request->input('is_currently_working'); }
         if($request->input('company') != NULL){$ProfileExperience->company =  $request->input('company'); }
         if($request->input('mall_id') != NULL){$ProfileExperience->mall_id =  $request->input('mall_id'); }
         if($request->input('time_from') != NULL){$ProfileExperience->time_from =  $request->input('time_from'); }
         if($request->input('time_to') != NULL){$ProfileExperience->time_to =  $request->input('time_to'); }


        $ProfileExperience->update();



		$this->updateUserFullTextSearch($user);



         $order->update();

         flash('تم تحديث طلبك بنجاح')->success();
        return \Redirect::route('my.edit.front.order', array($order->id));
    }

   }

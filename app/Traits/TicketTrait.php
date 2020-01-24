<?php
namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\Ticket;
use App\Company;
use App\JobSkill;
use App\JobSkillManager;
use App\Country;
use App\CountryDetail;
use App\State;
use App\City;
use App\CareerLevel;
use App\FunctionalArea;
use App\JobType;
use App\JobShift;
use App\Contract;
use App\Gender;
use App\JobExperience;
use App\DegreeLevel;
use App\SalaryPeriod;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\JobFormRequest;
use App\Http\Requests\Front\TicketFrontFormRequest;
use App\Http\Controllers\Controller;
use App\Traits\Skills;
use App\Events\JobPosted;


trait TicketTrait
{



       	public function indexTicket(Request $request)
    {

		$tickets = Auth::guard('company')->user()->tickets()->paginate(10);
		return view('ticket.company_tickets')
				->with('tickets', $tickets);
    }


	public function createTicket()
    {
		$company = Auth::guard('company')->user();
		if(
			($company->package_end_date === null) ||
			($company->package_end_date->lt(Carbon::now())) ||
			($company->jobs_quota <= $company->availed_jobs_quota)
			)
		{
			flash(__('Please subscribe to package first'))->error();
			return \Redirect::route('company.home');
			exit;
		}


		$ticketDepartments = DataArrayHelper::langTicketDepartmentsArray();
		$ticketStatuses = DataArrayHelper::langTicketStatusesArray();
		$ticketPriorites = DataArrayHelper::langTicketPrioritesArray();
		$contracts = DataArrayHelper::langContractArray($company->id);


        return view('ticket.add_edit_ticket')

                        ->with('ticketDepartments', $ticketDepartments)
                        ->with('ticketStatuses', $ticketStatuses)
                        ->with('ticketPriorites', $ticketPriorites)
                        ->with('contracts', $contracts)
        ;
    }

    public function storeFrontTicket(TicketFrontFormRequest $request)
    {
		$company = Auth::guard('company')->user();
		$contract = Contract::find($request->input('contract_id'));

        $ticket = new Ticket();
        $ticket->id = $request->input('id');
        $ticket->company_id = $company->id;
        $ticket->contract_id = $contract->id;
        $ticket->employee_id = $contract->employee_id;
        $ticket->subject = $request->input('subject');
        $ticket->priority_id = $request->input('priority_id');
        $ticket->department_id = $request->input('department_id');
        $ticket->ticket_status_id = $request->input('ticket_status_id');
        $ticket->notes = $request->input('notes');
       // $ticket->user_id = $request->input('user_id');
      //  $ticket->responsible_id = $request->input('responsible_id');
      //  $ticket = $this->assignJobValues($ticket, $request);
		$ticket->save();

	   //	event(new JobPosted($ticket));

        flash('ticket has been added!')->success();
        return \Redirect::route('company.edit.front.ticket', array($ticket->id));
    }



    public function editFrontTicket($id)
    {
         		$company = Auth::guard('company')->user();


         $ticket = Ticket::findOrFail($id);
   		$ticketDepartments = DataArrayHelper::langTicketDepartmentsArray();
		$ticketStatuses = DataArrayHelper::langTicketStatusesArray();
		$ticketPriorites = DataArrayHelper::langTicketPrioritesArray();
        		$contracts = DataArrayHelper::langContractArray($company->id);


        return view('ticket.add_edit_ticket')

                        ->with('contracts', $contracts)
                        ->with('ticket', $ticket)
                        ->with('ticketDepartments', $ticketDepartments)
                        ->with('ticketStatuses', $ticketStatuses)
                        ->with('ticketPriorites', $ticketPriorites)

        ;

    }

    public function updateFrontTicket($id, TicketFrontFormRequest $request)
    {
    		$contract = Contract::find($request->input('contract_id'));


        $ticket = Ticket::findOrFail($id);
        $ticket->id = $request->input('id');
               $ticket->subject = $request->input('subject');
        $ticket->priority_id = $request->input('priority_id');
        $ticket->department_id = $request->input('department_id');
        $ticket->ticket_status_id = $request->input('ticket_status_id');
        $ticket->contract_id = $request->input('contract_id');
        $ticket->employee_id = $contract->employee_id;
        $ticket->notes = $request->input('notes');
      //  $job = $this->assignJobValues($job, $request);
		/**********************************/
	  //	$job->slug = str_slug($job->title, '-').'-'.$job->id;
		/**********************************/

		/*         * ************************************ */
        $ticket->update();
		/*         * ************************************ */
       // $this->storeJobSkills($request, $job->id);
		/*         * ************************************ */
	  //	$this->updateFullTextSearch($job);
		/*         * ************************************ */

        flash('ticket has been updated!')->success();
        return \Redirect::route('company.edit.front.ticket', array($ticket->id));
    }

	public static function countNumJobs($field = 'title', $value = '')
	{
		if(!empty($value))
		{
			if($field == 'title')
			{
				return DB::table('jobs')->where('title','like',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'company_id')
			{
				return DB::table('jobs')->where('company_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'industry_id')
			{
				$company_ids = Company::where('industry_id','=',$value)->where('is_active','=',1)->pluck('id')->toArray();
				return DB::table('jobs')->whereIn('company_id', $company_ids)->where('is_active','=',1)->count('id');
			}
			if($field == 'job_skill_id')
			{
				$job_ids = JobSkillManager::where('job_skill_id','=',$value)->pluck('job_id')->toArray();
				return DB::table('jobs')->whereIn('id', array_unique($job_ids))->where('is_active','=',1)->count('id');
			}
			if($field == 'functional_area_id')
			{
				return DB::table('jobs')->where('functional_area_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'careel_level_id')
			{
				return DB::table('jobs')->where('careel_level_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'job_type_id')
			{
				return DB::table('jobs')->where('job_type_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'job_shift_id')
			{
				return DB::table('jobs')->where('job_shift_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'gender_id')
			{
				return DB::table('jobs')->where('gender_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'degree_level_id')
			{
				return DB::table('jobs')->where('degree_level_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'job_experience_id')
			{
				return DB::table('jobs')->where('job_experience_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'country_id')
			{
				return DB::table('jobs')->where('country_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'state_id')
			{
				return DB::table('jobs')->where('state_id','=',$value)->where('is_active','=',1)->count('id');
			}
			if($field == 'city_id')
			{
				return DB::table('jobs')->where('city_id','=',$value)->where('is_active','=',1)->count('id');
			}
		}
	}

	public function scopeNotExpire($query)
    {
        return $query->whereDate('expiry_date', '>', Carbon::now());//where('expiry_date', '>=', date('Y-m-d'));
    }
}

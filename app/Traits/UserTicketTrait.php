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
use App\User;


trait UserTicketTrait
{


       	public function indexTicket(Request $request)
    {
           $user = User::findOrFail(Auth::user()->id);
		$tickets = Ticket::where('user_id', '=', $user->id)
 						->orderBy('created_at', 'desc')
						->get();
           	 //	$tickets = Auth::guard('company')->user()->tickets()->paginate(10);

		return view('user.tickets')
                        ->with('user', $user)
						->with('tickets', $tickets);



    }


	public function createTicket()
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
						->get()->toArray();


		$ticketDepartments = DataArrayHelper::langTicketDepartmentsArray();
		$ticketStatuses = DataArrayHelper::langTicketStatusesArray();
		$ticketPriorites = DataArrayHelper::langTicketPrioritesArray();
	  //	$contracts = DataArrayHelper::langContractArray(18);


        return view('user.add_edit_ticket')
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
        $ticket->status_id = $request->input('status_id');
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
        $ticket->status_id = $request->input('status_id');
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

   }

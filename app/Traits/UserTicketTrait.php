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


		$ticketDepartments = DataArrayHelper::langTicketDepartmentsArray();
		$ticketStatuses = DataArrayHelper::langTicketStatusesArray();
		$ticketPriorites = DataArrayHelper::langTicketPrioritesArray();
	    $contracts = DataArrayHelper::UserContractArray($user->id);


        return view('user.add_edit_ticket')
                        ->with('ticketDepartments', $ticketDepartments)
                        ->with('ticketStatuses', $ticketStatuses)
                        ->with('ticketPriorites', $ticketPriorites)
                        ->with('contracts', $contracts)
        ;
    }

    public function storeFrontTicket(TicketFrontFormRequest $request)
    {

         $user = User::findOrFail(Auth::user()->id);
 		$contract = Contract::find($request->input('contract_id'));

        $ticket = new Ticket();

        $ticket->company_id = $contract->company_id;
        $ticket->contract_id = $contract->id;
        $ticket->employee_id = $contract->employee_id;
        $ticket->subject = $request->input('subject');
        $ticket->ticket_priority_id = $request->input('ticket_priority_id');
        $ticket->ticket_department_id = $request->input('ticket_department_id');
        $ticket->ticket_status_id = $request->input('ticket_status_id');
        $ticket->notes = $request->input('notes');
         $ticket->user_id = $user->id;
      //  $ticket->responsible_id = $request->input('responsible_id');
      //  $ticket = $this->assignJobValues($ticket, $request);
		$ticket->save();

	   //	event(new JobPosted($ticket));

        flash('ticket has been added!')->success();
        return \Redirect::route('my.edit.front.ticket', array($ticket->id));
    }



    public function editFrontTicket($id)
    {
         	    $user = User::findOrFail(Auth::user()->id);


         $ticket = Ticket::findOrFail($id);
   		$ticketDepartments = DataArrayHelper::langTicketDepartmentsArray();
		$ticketStatuses = DataArrayHelper::langTicketStatusesArray();
		$ticketPriorites = DataArrayHelper::langTicketPrioritesArray();
        	   $contracts = DataArrayHelper::UserContractArray($user->id);


        return view('user.add_edit_ticket')

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

               $ticket->subject = $request->input('subject');
        $ticket->ticket_priority_id = $request->input('ticket_priority_id');
        $ticket->ticket_department_id = $request->input('ticket_department_id');
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
        return \Redirect::route('my.edit.front.ticket', array($ticket->id));
    }

   }

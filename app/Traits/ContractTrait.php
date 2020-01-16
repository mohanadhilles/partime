<?php

namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\Contract;
use App\Company;


use App\JobExperience;
use App\DegreeLevel;
use App\SalaryPeriod;
use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests\Front\ContractFrontFormRequest;
use App\Http\Controllers\Controller;



trait ContractTrait
{


       	public function indexContract(Request $request)
    {

	   //	$contracts = Auth::guard('company')->user()->contracts()->paginate(10);
	   $company_id   = Auth::guard('company')->user()->id;

	    $contracts = Contract::select(
        'contracts.*'
        ,'employees.name as employee_name'
        ,'contract_statuses.contract_status'
        )->
        leftjoin('employees','employees.id','=','contracts.employee_id')->
        leftjoin('contract_statuses','contract_statuses.contract_status_id','=','contracts.contract_status_id')->

        where('contracts.company_id',$company_id)
        ->get();



		return view('contract.company_contracts')
				->with('contracts', $contracts);
    }


	public function createContract()
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




        return view('contract.add_edit_contract');
    }

    public function storeFrontContract(ContractFrontFormRequest $request)
    {
		$company = Auth::guard('company')->user();

        $contract = new Contract();
        $contract->id = $request->input('id');
        $contract->company_id = $company->id;

       // $contract->user_id = $request->input('user_id');
      //  $contract->responsible_id = $request->input('responsible_id');
      //  $contract = $this->assignJobValues($contract, $request);
		$contract->save();

	   //	event(new JobPosted($contract));

        flash('Contract has been added!')->success();
        return \Redirect::route('edit.front.contract', array($contract->id));
    }



    public function editFrontContract($id)
    {


         $contract = Contract::findOrFail($id);
   	   //	$contractDepartments = DataArrayHelper::langContractDepartmentsArray();
	   //	$contractStatuses = DataArrayHelper::langContractStatusesArray();
	   //	$contractPriorites = DataArrayHelper::langContractPrioritesArray();


        return view('contract.add_edit_contract')

                        ->with('contract', $contract)
                    //    ->with('ContractDepartments', $contractDepartments)
                     //   ->with('ContractStatuses', $contractStatuses)
                     //   ->with('ContractPriorites', $contractPriorites)

        ;

    }

    public function updateFrontContract($id, ContractFrontFormRequest $request)
    {
        $contract = Contract::findOrFail($id);
        $contract->id = $request->input('id');
               $contract->subject = $request->input('subject');
        $contract->priority_id = $request->input('priority_id');
        $contract->department_id = $request->input('department_id');
        $contract->status_id = $request->input('status_id');
        $contract->notes = $request->input('notes');
      //  $job = $this->assignJobValues($job, $request);
		/**********************************/
	  //	$job->slug = str_slug($job->title, '-').'-'.$job->id;
		/**********************************/

		/*         * ************************************ */
        $contract->update();
		/*         * ************************************ */
       // $this->storeJobSkills($request, $job->id);
		/*         * ************************************ */
	  //	$this->updateFullTextSearch($job);
		/*         * ************************************ */

        flash('Contract has been updated!')->success();
        return \Redirect::route('edit.front.Contract', array($contract->id));
    }


}

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

        return view('contract.add_edit_contract')->with('contract', $contract);

    }

    public function updateFrontContract($id, ContractFrontFormRequest $request)
    {

    	$now = Carbon::now();
        $expires_at =  $now->addDays($request->input('contract_days'));
        $contract = Contract::findOrFail($id);
        $contract->date_from = $request->input('date_from');
        $contract->date_to =  $request->input('date_to');
        $contract->contract_days =   $request->input('contract_days');
        $contract->hourly_rate =  $request->input('hourly_rate');
        $contract->expires_at =  $expires_at;

        //	 reminig_days
        $contract->update();

        flash('Contract has been updated!')->success();
        return \Redirect::route('company.edit.front.contract', array($contract->id));
    }


}

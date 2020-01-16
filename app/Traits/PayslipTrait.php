<?php

namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\Payslip;
use App\Company;

use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\JobFormRequest;
use App\Http\Requests\Front\PayslipFrontFormRequest;
use App\Http\Controllers\Controller;


trait PayslipTrait
{


       	public function indexpayslip(Request $request)
    {


		$payslips = Auth::guard('company')->user()->payslips()->paginate(10);

         

		return view('payslip.company_payslips')
				->with('payslips', $payslips);
    }


	public function createpayslip()
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


		$payslipDepartments = DataArrayHelper::langpayslipDepartmentsArray();
		$payslipStatuses = DataArrayHelper::langpayslipStatusesArray();
		$payslipPriorites = DataArrayHelper::langpayslipPrioritesArray();


        return view('payslip.add_edit_payslip')

                        ->with('payslipDepartments', $payslipDepartments)
                        ->with('payslipStatuses', $payslipStatuses)
                        ->with('payslipPriorites', $payslipPriorites)

        ;
    }

    public function storeFrontPayslip(payslipFrontFormRequest $request)
    {
		$company = Auth::guard('company')->user();

        $payslip = new Payslip();
        $payslip->id = $request->input('id');
        $payslip->company_id = $company->id;
        $payslip->subject = $request->input('subject');
        $payslip->priority_id = $request->input('priority_id');
        $payslip->department_id = $request->input('department_id');
        $payslip->status_id = $request->input('status_id');
        $payslip->notes = $request->input('notes');
       // $payslip->user_id = $request->input('user_id');
      //  $payslip->responsible_id = $request->input('responsible_id');
      //  $payslip = $this->assignJobValues($payslip, $request);
		$payslip->save();

	   //	event(new JobPosted($payslip));

        flash('payslip has been added!')->success();
        return \Redirect::route('edit.front.payslip', array($payslip->id));
    }



    public function editFrontPayslip($id)
    {


         $payslip = Payslip::findOrFail($id);
   		$payslipDepartments = DataArrayHelper::langpayslipDepartmentsArray();
		$payslipStatuses = DataArrayHelper::langpayslipStatusesArray();
		$payslipPriorites = DataArrayHelper::langpayslipPrioritesArray();


        return view('payslip.add_edit_payslip')

                        ->with('payslip', $payslip)
                        ->with('payslipDepartments', $payslipDepartments)
                        ->with('payslipStatuses', $payslipStatuses)
                        ->with('payslipPriorites', $payslipPriorites)

        ;

    }

    public function updateFrontPayslip($id, PayslipFrontFormRequest $request)
    {
        $payslip = Payslip::findOrFail($id);
        $payslip->id = $request->input('id');
               $payslip->subject = $request->input('subject');
        $payslip->priority_id = $request->input('priority_id');
        $payslip->department_id = $request->input('department_id');
        $payslip->status_id = $request->input('status_id');
        $payslip->notes = $request->input('notes');
      //  $job = $this->assignJobValues($job, $request);
		/**********************************/
	  //	$job->slug = str_slug($job->title, '-').'-'.$job->id;
		/**********************************/

		/*         * ************************************ */
        $payslip->update();
		/*         * ************************************ */
       // $this->storeJobSkills($request, $job->id);
		/*         * ************************************ */
	  //	$this->updateFullTextSearch($job);
		/*         * ************************************ */

        flash('payslip has been updated!')->success();
        return \Redirect::route('edit.front.payslip', array($payslip->id));
    }
	
 
}

<?php

namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\Payment;
use App\Company;

use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\JobFormRequest;
use App\Http\Requests\Front\PaymentFrontFormRequest;
use App\Http\Controllers\Controller;


trait PaymentTrait
{


       	public function indexPayment(Request $request)
    {


		$payments = Auth::guard('company')->user()->payments()
        ->paginate(10);

         

		return view('payment.company_payments')
				->with('payments', $payments);
    }


	public function createPayment()
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


		$paymentDepartments = DataArrayHelper::langpaymentDepartmentsArray();
		$paymentStatuses = DataArrayHelper::langpaymentStatusesArray();
		$paymentPriorites = DataArrayHelper::langpaymentPrioritesArray();


        return view('payment.add_edit_payment')

                        ->with('paymentDepartments', $paymentDepartments)
                        ->with('paymentStatuses', $paymentStatuses)
                        ->with('paymentPriorites', $paymentPriorites)

        ;
    }

    public function storeFrontPayment(paymentFrontFormRequest $request)
    {
		$company = Auth::guard('company')->user();

        $payment = new Payment();
        $payment->id = $request->input('id');
        $payment->company_id = $company->id;
        $payment->subject = $request->input('subject');
        $payment->priority_id = $request->input('priority_id');
        $payment->department_id = $request->input('department_id');
        $payment->status_id = $request->input('status_id');
        $payment->notes = $request->input('notes');
       // $payment->user_id = $request->input('user_id');
      //  $payment->responsible_id = $request->input('responsible_id');
      //  $payment = $this->assignJobValues($payment, $request);
		$payment->save();

	   //	event(new JobPosted($payment));

        flash('payment has been added!')->success();
        return \Redirect::route('edit.front.payment', array($payment->id));
    }



    public function editFrontPayment($id)
    {


         $payment = Payment::findOrFail($id);
   	   //	$paymentDepartments = DataArrayHelper::langpaymentDepartmentsArray();
	   //	$paymentStatuses = DataArrayHelper::langpaymentStatusesArray();
	   //	$paymentPriorites = DataArrayHelper::langpaymentPrioritesArray();


        return view('payment.add_edit_payment')
                        ->with('payment', $payment)
                   //     ->with('paymentDepartments', $paymentDepartments)
                  //      ->with('paymentStatuses', $paymentStatuses)
                   //     ->with('paymentPriorites', $paymentPriorites)

        ;

    }

    public function updateFrontPayment($id, paymentFrontFormRequest $request)
    {
        $payment = Payment::findOrFail($id);
        $payment->id = $request->input('id');
               $payment->subject = $request->input('subject');
        $payment->priority_id = $request->input('priority_id');
        $payment->department_id = $request->input('department_id');
        $payment->status_id = $request->input('status_id');
        $payment->notes = $request->input('notes');
      //  $job = $this->assignJobValues($job, $request);
		/**********************************/
	  //	$job->slug = str_slug($job->title, '-').'-'.$job->id;
		/**********************************/

		/*         * ************************************ */
        $payment->update();
		/*         * ************************************ */
       // $this->storeJobSkills($request, $job->id);
		/*         * ************************************ */
	  //	$this->updateFullTextSearch($job);
		/*         * ************************************ */

        flash('payment has been updated!')->success();
        return \Redirect::route('edit.front.payment', array($payment->id));
    }
	
 
}

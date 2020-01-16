<?php

namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\Employee;
use App\Company;

use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\JobFormRequest;
use App\Http\Requests\Front\EmployeeFrontFormRequest;
use App\Http\Controllers\Controller;
use App\Traits\Skills;
use App\Events\JobPosted;


trait EmployeeTrait
{


       	public function indexEmployee(Request $request)
    {


		$employees = Auth::guard('company')->user()->employees()

        ->paginate(10);
		return view('employee.company_employees')
				->with('employees', $employees);


    }


	public function createEmployee()
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


		$employeeDepartments = DataArrayHelper::langemployeeDepartmentsArray();
		$employeeStatuses = DataArrayHelper::langemployeeStatusesArray();
		$employeePriorites = DataArrayHelper::langemployeePrioritesArray();


        return view('employee.add_edit_employee')

                        ->with('employeeDepartments', $employeeDepartments)
                        ->with('employeeStatuses', $employeeStatuses)
                        ->with('employeePriorites', $employeePriorites)

        ;
    }

    public function storeFrontEmployee(employeeFrontFormRequest $request)
    {
		$company = Auth::guard('company')->user();

        $employee = new Employee();
        $employee->id = $request->input('id');
        $employee->company_id = $company->id;
        $employee->subject = $request->input('subject');
        $employee->priority_id = $request->input('priority_id');
        $employee->department_id = $request->input('department_id');
        $employee->status_id = $request->input('status_id');
        $employee->notes = $request->input('notes');
       // $employee->user_id = $request->input('user_id');
      //  $employee->responsible_id = $request->input('responsible_id');
      //  $employee = $this->assignJobValues($employee, $request);
		$employee->save();

	   //	event(new JobPosted($employee));

        flash('employee has been added!')->success();
        return \Redirect::route('edit.front.employee', array($employee->id));
    }



    public function editFrontEmployee($id)
    {


         $employee = Employee::findOrFail($id);
   	   //	$employeeDepartments = DataArrayHelper::langemployeeDepartmentsArray();
	   //	$employeeStatuses = DataArrayHelper::langemployeeStatusesArray();
	  //	$employeePriorites = DataArrayHelper::langemployeePrioritesArray();


        return view('employee.add_edit_employee')

                        ->with('employee', $employee)
                  //      ->with('employeeDepartments', $employeeDepartments)
                  //      ->with('employeeStatuses', $employeeStatuses)
                   //     ->with('employeePriorites', $employeePriorites)

        ;

    }

    public function updateFrontEmployee($id, employeeFrontFormRequest $request)
    {
        $employee = Employee::findOrFail($id);
        $employee->id = $request->input('id');
               $employee->subject = $request->input('subject');
        $employee->priority_id = $request->input('priority_id');
        $employee->department_id = $request->input('department_id');
        $employee->status_id = $request->input('status_id');
        $employee->notes = $request->input('notes');
      //  $job = $this->assignJobValues($job, $request);
		/**********************************/
	  //	$job->slug = str_slug($job->title, '-').'-'.$job->id;
		/**********************************/

		/*         * ************************************ */
        $employee->update();
		/*         * ************************************ */
       // $this->storeJobSkills($request, $job->id);
		/*         * ************************************ */
	  //	$this->updateFullTextSearch($job);
		/*         * ************************************ */

        flash('employee has been updated!')->success();
        return \Redirect::route('edit.front.employee', array($employee->id));
    }
	

}

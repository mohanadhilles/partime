<?php
namespace App\Http\Controllers\Company;
use Auth;
use DB;
use Input;
use Redirect;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Controllers\Controller;
use App\Traits\EmployeeTrait;


class EmployeeController  extends Controller
{
	use EmployeeTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company');
    }

}

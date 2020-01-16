<?php

namespace App;

use DB;
use App;
use App\Traits\Active;

use App\Traits\EmployeeTrait;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	use Active;

	use EmployeeTrait;



    protected $table = 'employees';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];



	public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function getUser($field = '')
    {
        if(null !== $user = $this->user()->first()){
			if (!empty($field)) {
				return $user->$field;
			} else {
				return $user;
			}
		}
    }


    	public function employee_status()
    {
        return $this->belongsTo('App\EmployeeStatus', 'employee_status_id', 'employee_status_id');
    }

    public function getEmployeeStatus($field = '')
    {
        if(null !== $user = $this->employee_status()->first()){
			if (!empty($field)) {
				return $user->$field;
			} else {
				return $user;
			}
		}
    }

}
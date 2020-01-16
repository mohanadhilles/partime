<?php

namespace App;

use DB;
use App;
use App\Traits\Active;

use App\Traits\TicketTrait;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
	use Active;

	use TicketTrait;



    protected $table = 'tickets';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];


	public function ticket_statuses()
    {
        return $this->belongsTo('App\TicketStatus', 'status_id', 'status_id');
    }

    public function getTicketStatus($field = '')
    {
		$gender = $this->ticket_statuses()->lang()->first();
		if(null === $gender){
			$gender = $this->ticket_statuses()->first();
		}
        if(null !== $gender){
            if (!empty($field))
                return $gender->$field;
            else
                return $gender;
        }
    }
 	public function ticket_departments()
    {
        return $this->belongsTo('App\TicketDepartment', 'department_id', 'department_id');
    }

    public function getTicketDepartment($field = '')
    {
		$gender = $this->ticket_departments()->lang()->first();
		if(null === $gender){
			$gender = $this->ticket_departments()->first();
		}
        if(null !== $gender){
            if (!empty($field))
                return $gender->$field;
            else
                return $gender;
        }
    }
	public function ticket_priorites()
    {
        return $this->belongsTo('App\TicketPriority', 'priority_id', 'priority_id');
    }

    public function getTicketPriority($field = '')
    {
		$gender = $this->ticket_priorites()->lang()->first();
		if(null === $gender){
			$gender = $this->ticket_priorites()->first();
		}
        if(null !== $gender){
            if (!empty($field))
                return $gender->$field;
            else
                return $gender;
        }
    }


    	public function employees()
    {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }

    public function getEmployee($field = '')
    {
		$gender = $this->employees()->first();
		if(null === $gender){
			$gender = $this->employees()->first();
		}
        if(null !== $gender){
            if (!empty($field))
                return $gender->$field;
            else
                return $gender;
        }
    }


}
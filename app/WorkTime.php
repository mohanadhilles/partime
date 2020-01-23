<?php

namespace App;

use DB;
use App;
use App\Traits\Active;

use App\Traits\ContractTrait;

use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
	use Active;

	use ContractTrait;



    protected $table = 'work_times';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];


}
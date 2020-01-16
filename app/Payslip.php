<?php

namespace App;

use DB;
use App;
use App\Traits\Active;

use App\Traits\PayslipTrait;

use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
	use Active;

	use PayslipTrait;



    protected $table = 'payslips';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];


}

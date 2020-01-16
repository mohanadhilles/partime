<?php

namespace App;

use DB;
use App;
use App\Traits\Active;

use App\Traits\ContractTrait;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
	use Active;

	use ContractTrait;



    protected $table = 'contracts';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];


}
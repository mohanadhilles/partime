<?php

namespace App;

use App;
  use App\Traits\Active;
 use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	use Active;

    protected $table = 'orders';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];



	public function user()
    {
        return $this->belongsTo('App\User');
    }


    	public function orderStatus()
    {
        return $this->belongsTo('App\OrderStatus', 'order_status_id', 'order_status_id');
    }

    public function getorderStatus($field = '')
    {
        $careerLevel = $this->orderStatus()->lang()->first();
		if(null === $careerLevel){
			$careerLevel = $this->orderStatus()->first();
		}
        if(null !== $careerLevel){
			if (!empty($field)) {
				return $careerLevel->$field;
			} else {
				return $careerLevel;
			}
		}
    }


   }
<?php

namespace App;

use DB;
use App;
use App\Traits\Active;

use App\Traits\PaymentTrait;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	use Active;

	use PaymentTrait;



    protected $table = 'invoices';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];


    	public function invoice_statuses()
    {
        return $this->belongsTo('App\InvoiceStatus', 'invoice_status_id', 'invoice_status_id');
    }

    public function getInvoiceStatus($field = '')
    {
        if(null !== $user = $this->invoice_statuses()->first()){
			if (!empty($field)) {
				return $user->$field;
			} else {
				return $user;
			}
		}
    }

 	public function payment_methods()
    {
        return $this->belongsTo('App\PaymentMethod', 'payment_method_id', 'payment_method_id');
    }

    public function getPaymentMethod($field = '')
    {
        if(null !== $user = $this->payment_methods()->first()){
			if (!empty($field)) {
				return $user->$field;
			} else {
				return $user;
			}
		}
    }

}
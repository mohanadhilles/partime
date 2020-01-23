<?php

namespace App;

use App;
  use App\Traits\Active;
 use App\Helpers\MiscHelper;
use App\Helpers\DataArrayHelper;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

	use Active;

    protected $table = 'offers';
    public $timestamps = true;
    protected $guarded = ['id'];
    //protected $dateFormat = 'U';
    protected $dates = ['created_at', 'updated_at'];

   }
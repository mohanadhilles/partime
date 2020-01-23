<?php
namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\Offer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


trait UserOfferTrait
{


       	public function indexOffer(Request $request)
    {
           $user = User::findOrFail(Auth::user()->id);
		$offers = Offer:: where('user_id', '=', $user->id)
 						->orderBy('created_at', 'desc')
						->get();
           	 //	$offers = Auth::guard('company')->user()->offers()->paginate(10);

		return view('user.offers')
                        ->with('user', $user)
						->with('offers', $offers);



    }


	public function createOffer()
    {


    }





    public function editFrontOffer($id)
    {


    }

    public function updateFrontOffer($id, OfferFrontFormRequest $request)
    {

    }

   }

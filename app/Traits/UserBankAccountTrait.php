<?php
namespace App\Traits;

use Auth;
use DB;
use Input;
use Redirect;
use Carbon\Carbon;
use App\BankAccount;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

use App\Http\Requests\Front\BankAccountFrontFormRequest;
trait UserBankAccountTrait
{


       	public function indexFrontBankAccount(Request $request)
    {
           $user = User::findOrFail(Auth::user()->id);
		$bank_accounts = BankAccount::where('user_id', '=', $user->id)
 						->orderby('created_at', 'desc')
						->get();
           	 //	$bank_accounts = Auth::guard('company')->user()->bank_accounts()->paginate(10);

		return view('user.bank_accounts')
                        ->with('user', $user)
						->with('bank_accounts', $bank_accounts);



    }


	public function createFrontBankAccount()
    {



        return view('user.add_edit_bank_account')

        ;
    }

    public function storeFrontBankAccount(BankAccountFrontFormRequest $request)
    {
                $user = User::findOrFail(Auth::user()->id);


        $bank_accounts = new BankAccount();
        $bank_accounts->bank_name = $request->input('bank_name');
        $bank_accounts->card_number = $request->input('card_number');
        $bank_accounts->user_id = $user->id;

        $bank_accounts->save();



        flash('bank accounts has been added!')->success();
        return \Redirect::route('my.edit.front.account', array($bank_accounts->id));

    }



    public function editFrontBankAccount($id)
    {

           $bank_account = BankAccount::findOrFail($id);



        return view('user.add_edit_bank_account')->with('bank_account',$bank_account);
    }

    public function updateFrontBankAccount($id, BankAccountFrontFormRequest $request)
    {

        $bank_accounts =  BankAccount::findOrFail($id);
        $bank_accounts->bank_name = $request->input('bank_name');
        $bank_accounts->card_number = $request->input('card_number');

	  $bank_accounts->update();

        flash('bank accounts has been updated successfully!')->success();
        return \Redirect::route('my.edit.front.account', array($bank_accounts->id));
    }

   }

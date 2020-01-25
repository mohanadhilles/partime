<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_accounts', function(Blueprint $table)
		{
		   	$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('bank_name')->nullable();
            
			$table->string('card_number')->nullable();
			$table->integer('bank_account_status')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bank_accounts');
	}

}

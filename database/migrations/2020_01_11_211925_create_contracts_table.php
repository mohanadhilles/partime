<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contracts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->nullable();
			$table->integer('job_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('employee_id')->nullable();
			$table->integer('contract_status_id')->default(1);
			$table->integer('contract_days')->nullable()->default(1);
			$table->integer('reminig_days')->nullable();
			$table->integer('contract_hours')->default(1);
			$table->float('hourly_rate', 10, 0)->nullable()->default(1);
			$table->integer('percentage_form_user')->default(25);
			$table->dateTime('expires_at')->nullable();
			$table->timestamps();
            
			$table->timestamp('date_from')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('date_to')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contracts');
	}

}

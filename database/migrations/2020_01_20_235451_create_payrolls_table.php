<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePayrollsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payrolls', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('payroll_id')->nullable();
			$table->integer('company_id');
			$table->integer('month');
			$table->integer('year')->nullable();
			$table->dateTime('date')->nullable()->comment('Pay Date / Pay Day');
			$table->integer('is_verified')->nullable()->default(0);
			$table->boolean('is_approved')->default(0);
			$table->boolean('is_locked')->nullable()->default(0);
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
		Schema::drop('payrolls');
	}

}

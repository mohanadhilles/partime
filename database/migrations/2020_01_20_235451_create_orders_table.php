<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('current_salary', 100)->nullable();
			$table->string('expected_salary', 100)->nullable();
			$table->string('salary_currency', 10)->nullable();
			$table->boolean('is_immediate_available')->nullable()->default(1);
			$table->integer('appropriate_work_time_id')->nullable();
			$table->integer('work_time_id')->nullable();
			$table->time('appropriate_work_time_from_1')->nullable();
			$table->time('appropriate_work_time_to_1')->nullable();
			$table->time('appropriate_work_time_from_2')->nullable();
			$table->time('appropriate_work_time_to_2')->nullable();
			$table->time('appropriate_work_time_from_3')->nullable();
			$table->time('appropriate_work_time_to_3')->nullable();
			$table->dateTime('expected_join_date')->nullable();
			$table->string('interested_job')->nullable();
			$table->text('notes')->nullable();
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
		Schema::drop('orders');
	}

}

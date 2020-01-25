<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_departments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('department', 100)->nullable();
			$table->integer('department_id')->nullable();
			$table->boolean('is_default')->default(0);
			$table->boolean('is_active')->nullable();
			$table->integer('sort_order')->default(99);
			$table->string('lang', 10)->default('ar');
			$table->integer('created_at');

            
			$table->integer('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_departments');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject')->nullable();

           $table->unsignedInteger('company_id')->nullable(); $table->foreign('company_id')->references('id')->on('companies');
           $table->integer('priority_id')->nullable();
           $table->integer('department_id')->nullable();
           $table->integer('ticket_status_id')->nullable();
           $table->integer('user_id')->nullable();
           $table->integer('responsible_id')->nullable();
           $table->unsignedInteger('contract_id')->nullable(); $table->foreign('contract_id')->references('id')->on('contracts');
           $table->unsignedInteger('employee_id')->nullable(); $table->foreign('employee_id')->references('id')->on('employees');
  			$table->text('notes')->nullable();
 			$table->boolean('is_active')->default(1);
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
		Schema::drop('tickets');
	}

}

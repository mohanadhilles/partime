<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_statuses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('invoice_status_id')->nullable();
			$table->string('name', 100)->nullable();
			$table->string('en_name', 100)->nullable();
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
		Schema::drop('invoice_statuses');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_statuses', function(Blueprint $table)
		{
            	$table->increments('id');
 			$table->integer('ticket_status_id')->nullable()->default(0);
			$table->string('ticket_status', 40);
			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('is_active')->default(1);
			$table->integer('sort_order')->default(9999);
			$table->string('lang', 10)->default('ar');
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
		Schema::drop('ticket_statuses');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketPrioritesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_priorites', function(Blueprint $table)
		{
		   	$table->increments('id'); 
			$table->string('ticket_priority', 100)->nullable();
			$table->integer('ticket_priority_id')->nullable();
			$table->boolean('is_default')->default(0);
			$table->boolean('is_active')->nullable();
			$table->integer('sort_order')->default(99);
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
		Schema::drop('ticket_priorites');
	}

}

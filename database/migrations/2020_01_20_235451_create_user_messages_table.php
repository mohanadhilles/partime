<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_messages', function(Blueprint $table)
		{
			$table->increments('id');
            
			$table->integer('listing_id')->nullable();
			$table->string('listing_title', 150)->nullable();
			$table->integer('from_id')->nullable();
			$table->integer('to_id')->nullable();
			$table->string('to_email', 100)->nullable();
			$table->string('to_name', 100)->nullable();
			$table->string('from_name', 100)->nullable();
			$table->string('from_email', 100)->nullable();
			$table->string('from_phone', 20)->nullable();
			$table->text('message_txt')->nullable();
			$table->string('subject', 200)->nullable();
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
		Schema::drop('user_messages');
	}

}

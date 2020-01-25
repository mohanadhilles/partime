<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSendToFriendMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('send_to_friend_messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('your_name', 100)->nullable();
			$table->string('your_email', 100)->nullable();
			$table->text('job_url')->nullable();
			$table->string('friend_name', 100)->nullable();
			$table->string('friend_email', 100)->nullable();
            
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
		Schema::drop('send_to_friend_messages');
	}

}

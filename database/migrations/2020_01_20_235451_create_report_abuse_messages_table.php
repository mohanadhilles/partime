<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportAbuseMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_abuse_messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('your_name', 100)->nullable();
			$table->string('your_email', 100)->nullable();
			$table->text('job_url', 16777215)->nullable();
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
		Schema::drop('report_abuse_messages');
	}

}

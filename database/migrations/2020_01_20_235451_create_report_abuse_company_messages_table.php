<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportAbuseCompanyMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_abuse_company_messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('your_name', 100)->nullable();
			$table->string('your_email', 100)->nullable();
			$table->text('company_url')->nullable();
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
		Schema::drop('report_abuse_company_messages');
	}

}

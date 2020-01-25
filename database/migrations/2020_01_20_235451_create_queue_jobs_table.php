<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueueJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queue_jobs', function(Blueprint $table)
		{
				$table->increments('id');   
			$table->string('queue');
			$table->text('payload');
			$table->boolean('attempts');
			$table->integer('reserved_at')->unsigned()->nullable();
			$table->integer('available_at')->unsigned();
			$table->integer('created_at')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('queue_jobs');
	}

}

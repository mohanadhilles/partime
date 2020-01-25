<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('name', 100)->nullable();
			$table->string('image', 120)->nullable();
			$table->text('description')->nullable();
			$table->text('url')->nullable();
			$table->dateTime('date_start')->nullable();
			$table->dateTime('date_end')->nullable();
			$table->boolean('is_on_going')->nullable();
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
		Schema::drop('profile_projects');
	}

}

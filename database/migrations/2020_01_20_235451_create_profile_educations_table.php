<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_educations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->integer('degree_level_id')->nullable();
			$table->integer('degree_type_id')->nullable();
			$table->string('degree_title', 150)->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->integer('city_id')->nullable();
			$table->string('date_completion', 15)->nullable();
			$table->string('institution', 150)->nullable();
            
			$table->string('degree_result', 20)->nullable();
			$table->integer('result_type_id')->nullable();
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
		Schema::drop('profile_educations');
	}

}

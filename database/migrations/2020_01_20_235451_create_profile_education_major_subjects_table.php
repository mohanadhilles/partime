<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfileEducationMajorSubjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_education_major_subjects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('profile_education_id')->nullable();
			$table->integer('major_subject_id')->nullable();
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
		Schema::drop('profile_education_major_subjects');
	}

}

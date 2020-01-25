<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer('company_id')->nullable();
			$table->integer('job_status_id')->default(1);
			$table->string('title', 200)->nullable();
			$table->text('description')->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->integer('city_id')->nullable();
			$table->boolean('is_freelance')->nullable()->default(0);
			$table->integer('career_level_id')->nullable();
			$table->integer('salary_from')->nullable();
			$table->integer('salary_to')->nullable();
			$table->float('salary', 10, 0)->nullable();
			$table->boolean('hide_salary')->nullable()->default(0);
			$table->string('salary_currency', 5)->nullable();
			$table->integer('salary_period_id')->nullable();
			$table->integer('contract_period_id')->nullable();
			$table->integer('functional_area_id')->nullable();
			$table->integer('job_type_id')->nullable();
			$table->integer('job_shift_id')->nullable();
			$table->integer('num_of_positions')->nullable();
			$table->integer('working_hours')->nullable()->comment('The number of working hours');
			$table->integer('work_days')->nullable()->comment(' The number of work days ');
			$table->dateTime('expected_date')->nullable();
			$table->string('candidate_working')->nullable()->comment('Do you prefer the candidate working in a specific company? Add company name ');
			$table->string('candidate_was_working')->nullable()->comment('Do you prefer the candidate who was working for a specific company previously? Add the company name');
			$table->integer('gender_id')->nullable();
			$table->dateTime('expiry_date')->nullable();
			$table->integer('degree_level_id')->nullable();
			$table->integer('job_experience_id')->nullable();
			$table->boolean('is_active')->nullable()->default(1);
			$table->boolean('is_featured')->nullable()->default(0);
			$table->timestamps();
			$table->text('search')->nullable();
			$table->string('slug')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}

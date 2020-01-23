<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100)->nullable();
			$table->string('middle_name', 100)->nullable();
			$table->string('last_name', 100)->nullable();
			$table->string('name', 250)->nullable();
			$table->string('email', 100)->nullable()->unique();
			$table->string('father_name', 100)->nullable();
			$table->date('date_of_birth')->nullable();
                $table->unsignedInteger('gender_id')->nullable(); $table->foreign('gender_id')->references('id')->on('genders');
                $table->unsignedInteger('marital_status_id')->nullable(); $table->foreign('marital_status_id')->references('id')->on('marital_statuses');
                $table->integer('nationality_id')->nullable();
                $table->unsignedInteger('country_id')->nullable(); $table->foreign('country_id')->references('id')->on('countries');
                $table->unsignedInteger('state_id')->nullable(); $table->foreign('state_id')->references('id')->on('states');
                $table->unsignedInteger('city_id')->nullable(); $table->foreign('city_id')->references('id')->on('cities');
                $table->unsignedInteger('job_experience_id')->nullable(); $table->foreign('job_experience_id')->references('id')->on('job_experiences');
                $table->unsignedInteger('career_level_id')->nullable(); $table->foreign('career_level_id')->references('id')->on('career_levels');
                $table->unsignedInteger('industry_id')->nullable(); $table->foreign('industry_id')->references('id')->on('industries');
                $table->unsignedInteger('functional_area_id')->nullable(); $table->foreign('functional_area_id')->references('id')->on('functional_areas');

 			$table->string('national_id_card_number', 100)->nullable();
  			$table->string('phone', 20)->nullable();
			$table->string('mobile_num', 25)->nullable();

 			$table->string('current_salary', 100)->nullable();
			$table->string('expected_salary', 100)->nullable();
			$table->string('salary_currency', 10)->nullable();
			$table->string('street_address')->nullable();
			$table->boolean('is_active')->nullable()->default(0);
			$table->boolean('verified')->default(0);
			$table->string('verification_token')->nullable();
			$table->string('provider', 35)->nullable();
			$table->string('provider_id')->nullable();
			$table->string('linkedin_link')->default('https://www.linkedin.com');
			$table->string('password')->nullable();
 			$table->string('image', 100)->nullable()->default('user-icon.png');
			$table->string('lang', 10)->nullable();

			$table->boolean('is_immediate_available')->nullable()->default(1);
			$table->integer('num_profile_views')->nullable()->default(0);
             $table->unsignedInteger('package_id')->nullable(); $table->foreign('package_id')->references('id')->on('packages');

			$table->dateTime('package_start_date')->nullable();
			$table->dateTime('package_end_date')->nullable();
			$table->integer('jobs_quota')->nullable()->default(0);
			$table->integer('availed_jobs_quota')->nullable()->default(0);
			$table->text('search')->nullable()->index('full_search');
			$table->string('neighborhood', 200)->nullable();
            $table->integer('appropriate_work_time_id')->nullable();  
            $table->unsignedInteger('work_time_id')->nullable(); $table->foreign('work_time_id')->references('id')->on('work_times');


 			$table->time('appropriate_work_time_from_1')->nullable();
			$table->time('appropriate_work_time_to_1')->nullable();
			$table->time('appropriate_work_time_from_2')->nullable();
			$table->time('appropriate_work_time_to_2')->nullable();
			$table->time('appropriate_work_time_from_3')->nullable();
			$table->time('appropriate_work_time_to_3')->nullable();
			$table->boolean('have_you_a_car')->nullable();
			$table->boolean('have_you_computer')->nullable();
			$table->dateTime('expected_join_date')->nullable();
			$table->string('interested_job')->nullable();
			$table->text('notes')->nullable();

             $table->timestamp('email_verified_at')->nullable();
             $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

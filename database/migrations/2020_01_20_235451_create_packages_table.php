<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('package_title')->nullable();
			$table->double('package_price')->nullable()->default(0.00);
			$table->integer('package_num_days')->nullable()->default(0);
			$table->integer('package_num_listings')->nullable()->default(0);
			$table->enum('package_for', array('job_seeker','employer'))->nullable()->default('job_seeker');
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
		Schema::drop('packages');
	}

}

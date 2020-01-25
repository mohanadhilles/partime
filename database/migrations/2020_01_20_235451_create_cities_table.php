<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('city_id')->nullable()->default(0);
			$table->string('city', 30);

     $table->unsignedInteger('state_id');
     $table->foreign('state_id')->references('id')->on('states');

			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('is_active')->default(1);
			$table->integer('sort_order')->default(9999);
			$table->string('lang', 10)->default('ar');
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
		Schema::drop('cities');
	}

}

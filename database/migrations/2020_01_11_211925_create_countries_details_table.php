<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id')->nullable()->default(0);
			$table->string('sort_name', 5);
			$table->integer('phone_code');
			$table->string('currency', 60)->nullable();
			$table->string('code', 7)->nullable();
            
			$table->string('symbol', 7)->nullable();
			$table->string('thousand_separator', 2)->nullable();
			$table->string('decimal_separator', 2)->nullable();
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
		Schema::drop('countries_details');
	}

}

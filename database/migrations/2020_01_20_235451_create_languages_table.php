<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('languages', function(Blueprint $table)
		{
		    
			$table->increments('id');
			$table->string('lang', 250)->nullable();
			$table->string('native', 250)->nullable();
			$table->string('iso_code', 10)->nullable();
			$table->boolean('is_active')->nullable()->default(0);
			$table->boolean('is_rtl')->default(0);
			$table->boolean('is_default')->default(0);
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
		Schema::drop('languages');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndustriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('industries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('industry_id')->nullable()->default(0);
			$table->string('industry', 150)->nullable();
			$table->boolean('is_active')->nullable()->default(1);
			$table->integer('sort_order')->nullable()->default(99999);
			$table->string('lang', 10)->nullable()->default('ar');
			$table->boolean('is_default')->nullable()->default(0);
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
		Schema::drop('industries');
	}

}

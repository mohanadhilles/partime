<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seo', function(Blueprint $table)
		{
		  	   	$table->increments('id');
			$table->text('page_title')->nullable();
			$table->text('seo_title')->nullable();
			$table->text('seo_description')->nullable();
			$table->text('seo_keywords')->nullable();
			$table->text('seo_other')->nullable();
            
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
		Schema::drop('seo');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('result_types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('result_type_id')->nullable()->default(0);
			$table->string('result_type', 40);
			$table->integer('is_default')->nullable()->default(0);
			$table->integer('is_active')->default(1);
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
		Schema::drop('result_types');
	}

}

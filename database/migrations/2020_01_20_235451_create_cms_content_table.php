<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_id')->nullable();
			$table->text('page_title')->nullable();
			$table->longText('page_content')->nullable();
			$table->timestamps();
			$table->string('lang', 10)->nullable()->default('ar');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cms_content');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('page_slug', 250)->nullable();
			$table->boolean('show_in_top_menu')->nullable()->default(0);
			$table->boolean('show_in_footer_menu')->nullable()->default(0);
			$table->text('seo_title', 65535)->nullable();
			$table->text('seo_description', 65535)->nullable();
			$table->text('seo_keywords', 65535)->nullable();
			$table->text('seo_other', 65535)->nullable();
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
		Schema::drop('cms');
	}

}

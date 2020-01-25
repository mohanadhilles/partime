<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('video_id')->nullable()->default(0);
			$table->text('video_title')->nullable();
			$table->text('video_text')->nullable();
			$table->text('video_link')->nullable();
			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('is_active')->nullable();
			$table->integer('sort_order')->nullable()->default(99999);
			$table->string('lang', 10)->nullable()->default('ar');
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
		Schema::drop('videos');
	}

}

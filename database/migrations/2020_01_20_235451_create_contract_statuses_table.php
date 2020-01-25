<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contract_statuses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('contract_status_id')->nullable()->default(0);
			$table->string('contract_status', 200)->nullable();
			$table->string('code', 20)->nullable()->comment('color code');
			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('is_active')->nullable();
			$table->integer('sort_order')->nullable()->default(1);
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
		Schema::drop('contract_statuses');
	}

}

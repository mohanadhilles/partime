<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('customer_name', 200)->nullable()->default('عميل جديد');
			$table->integer('service_id')->default(1)->index('invoices_service_id_foreign');
			$table->integer('invoice_status_id')->unsigned()->nullable()->default(1);
			$table->integer('payment_method_id')->unsigned()->nullable()->default(1);
			$table->string('transaction_id')->nullable();
			$table->dateTime('transaction_date')->nullable();
			$table->float('amount')->nullable();
			$table->integer('company_id')->nullable();
			$table->integer('job_id')->nullable();
			$table->integer('contract_id')->nullable();
			$table->integer('is_active')->default(1);
			$table->integer('is_use')->default(2);
			$table->integer('created_by')->nullable()->default(0);
			$table->integer('updated_by')->nullable()->default(0);
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
		Schema::drop('invoices');
	}

}

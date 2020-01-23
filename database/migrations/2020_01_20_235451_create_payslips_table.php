<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {


            $table->increments('id');

                $table->unsignedInteger('payslip_status_id')->nullable();

    $table->foreign('payslip_status_id')->references('id')->on('payslip_statuses');

        $table->unsignedInteger('contract_id')->nullable();

    $table->foreign('contract_id')->references('id')->on('contracts');


 			$table->dateTime('date_from')->nullable();
			$table->dateTime('date_to')->nullable();
			$table->integer('count_days')->default(1);
			$table->integer('count_hours')->default(1);
			$table->integer('count_hourly_rate')->nullable();


 			$table->integer('percentage_form_user')->default(25);
			$table->integer('percentage_form_user_amount')->nullable();

               $table->unsignedInteger('payroll_id')->nullable();

    $table->foreign('payroll_id')->references('id')->on('payrolls');


    $table->integer('user_id')->nullable();



    $table->unsignedInteger('company_id')->nullable();

    $table->foreign('company_id')->references('id')->on('companies');


    $table->unsignedInteger('job_id')->nullable();

    $table->foreign('job_id')->references('id')->on('jobs');


            $table->string('month');
            $table->integer('year');

            //allowance
            $table->double('generalAllowance');
            $table->double('overtime');
            $table->double('claims');
            $table->double('bonus');

            //Total Additions
            $table->double('totalAdditions');

            //deduction
            $table->double('epfDeductionPercentage');
            $table->double('epfDeduction');
            $table->double('socsoDeduction');
            $table->double('taxDeduction');
            $table->double('zakat');

            //Total Deduction
            $table->double('totalDeductions');

            //company contributions
            $table->double('companyEpfContribution');
            $table->double('companySocsoContribution');

            //summary
            $table->double('netPay')->nullable();

            //status
            $table->boolean('isVerified')->default(0);


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
        Schema::dropIfExists('payslips');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoanApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loan_applications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id')->unsigned()->index('loan_applications_member_id_foreign');
			$table->string('date_applied', 191);
			$table->string('date_due', 191);
			$table->float('amount');
			$table->float('interest', 10, 0);
			$table->boolean('admin_status')->default(0);
			$table->boolean('guarantor_status')->default(0);
			$table->string('guarantor_reason', 191)->nullable();
			$table->string('admin_reason', 191)->nullable();
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
		Schema::drop('loan_applications');
	}

}

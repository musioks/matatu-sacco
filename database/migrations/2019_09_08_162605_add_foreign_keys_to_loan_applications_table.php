<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoanApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loan_applications', function(Blueprint $table)
		{
			$table->foreign('member_id')->references('id')->on('members')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loan_applications', function(Blueprint $table)
		{
			$table->dropForeign('loan_applications_member_id_foreign');
		});
	}

}

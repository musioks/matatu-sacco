<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('members_user_id_foreign');
			$table->string('fname', 191);
			$table->string('lname', 191);
			$table->string('residence', 191);
			$table->string('relationship', 191);
			$table->string('dob', 191);
			$table->string('nok', 191);
			$table->string('nid', 191)->unique();
			$table->string('phone', 191)->unique();
			$table->string('email', 191)->unique();
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
		Schema::drop('members');
	}

}

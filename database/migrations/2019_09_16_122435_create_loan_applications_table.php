<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('loan_type_id');
            $table->float('principal_amount',15,2);
            $table->unsignedInteger('interest_period');
            $table->float('interest_rate',8,2);
            $table->float('interest_amount',8,2);
            $table->unsignedBigInteger('guarantor_id');
            $table->boolean('guarantor_accepted')->default(0);
            $table->unsignedBigInteger('loan_status_id');
            $table->date('date_approved');
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
        Schema::dropIfExists('loan_applications');
    }
}

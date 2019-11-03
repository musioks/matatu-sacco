<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBusBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bus_bookings', function (Blueprint $table) {
            $table->dropColumn(['name', 'phone', 'email']);
            $table->unsignedBigInteger('customer_id')->after('bus_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bus_bookings', function (Blueprint $table) {
            //
        });
    }
}

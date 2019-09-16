<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LoanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loan_types')->delete();

        DB::table('loan_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Asset Financing',
                    'interest_rate' => 0.06,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Personal Loan',
                    'interest_rate' => 0.08,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Business Loan',
                    'interest_rate' => 0.05,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'Mwalimu Loan',
                    'interest_rate' => 0.045,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));
    }
}

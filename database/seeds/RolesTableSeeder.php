<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->truncate();

        DB::table('roles')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'slug' => 'admin',
                    'name' => 'admin',
                    'permissions' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            1 =>
                array(
                    'id' => 2,
                    'slug' => 'member',
                    'name' => 'member',
                    'permissions' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            2 =>
                array(
                    'id' => 3,
                    'slug' => 'customer',
                    'name' => 'customer',
                    'permissions' => NULL,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));


    }
}

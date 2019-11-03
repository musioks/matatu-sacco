<?php

use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'System Admin',
            'email' => 'system@admin.com',
            'password' => 'admin1234',
        ];

        $user = Sentinel::registerAndActivate($data);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($user);
    }
}

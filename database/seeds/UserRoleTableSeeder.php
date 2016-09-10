<?php

use App\RoleUser;
use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newrole = new RoleUser();
        $newrole->role_id = '1';
        $newrole->user_id = '1';
        $newrole->timestamps = false;
        $newrole->save();

        $newrole = new RoleUser();
        $newrole->role_id = '2';
        $newrole->user_id = '2';
        $newrole->timestamps = false;
        $newrole->save();

        $newrole = new RoleUser();
        $newrole->role_id = '3';
        $newrole->user_id = '3';
        $newrole->timestamps = false;
        $newrole->save();
    }
}

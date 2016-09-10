<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->display_name = 'Admin Role';
        $adminRole->name = 'Admin';
        $adminRole->description = 'This is the default admin role';
        $adminRole->save();

        $moderatorRole = new Role();
        $moderatorRole->display_name = 'Moderator Role';
        $moderatorRole->name = 'Moderator';
        $moderatorRole->description = 'This is the default Moderator Role';
        $moderatorRole->save();

        $agentRole = new Role();
        $agentRole->display_name = 'Agent Role';
        $agentRole->name = 'Agent';
        $agentRole->description = 'This is the default Agent Role';
        $agentRole->save();
    }
}

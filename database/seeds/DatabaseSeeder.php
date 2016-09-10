<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PriorityTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}

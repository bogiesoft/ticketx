<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createPermission = new Permission;
        $createPermission->display_name = 'Manage Roles';
        $createPermission->name = 'manage-roles';
        $createPermission->description = 'Permission for Managing Roles';
        $createPermission->save();
        
        $createPermission = new Permission;
        $createPermission->display_name = 'Manage Tickets';
        $createPermission->name = 'manage-tickets';
        $createPermission->description = 'Permission for Managing Tickets';
        $createPermission->save();        

        $createPermission = new Permission;
        $createPermission->display_name = 'Manage Users';
        $createPermission->name = 'manage-users';
        $createPermission->description = 'Permission for Managing Users';
        $createPermission->save();     
        
        $createPermission = new Permission;
        $createPermission->display_name = 'View Backend';
        $createPermission->name = 'view-backend';
        $createPermission->description = 'Permission for Viewing Backend';
        $createPermission->save();     
        
        $createPermission = new Permission;
        $createPermission->display_name = 'Manage Permissions';
        $createPermission->name = 'manage-permissions';
        $createPermission->description = 'Permission for Managing Permissions';
        $createPermission->save();            
 
        $createPermission = new Permission;
        $createPermission->display_name = 'Manage Settings';
        $createPermission->name = 'manage-settings';
        $createPermission->description = 'Permission for Managing Settings';
        $createPermission->save();          
    }
}

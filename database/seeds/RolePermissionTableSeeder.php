<?php

use Illuminate\Database\Seeder;

use App\PermissionRole;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $createUser = new PermissionRole;
        $createUser->role_id = '1';
        $createUser->permission_id = '1';
        $createUser->timestamps = false;
        $createUser->save();

        $createUser = new PermissionRole;
        $createUser->role_id = '1';
        $createUser->permission_id = '2';
        $createUser->timestamps = false;
        $createUser->save();

        $createUser = new PermissionRole;
        $createUser->role_id = '1';
        $createUser->permission_id = '3';
        $createUser->timestamps = false;
        $createUser->save();
        
        $createUser = new PermissionRole;
        $createUser->role_id = '1';
        $createUser->permission_id = '4';
        $createUser->timestamps = false;
        $createUser->save();
        
        $createUser = new PermissionRole;
        $createUser->role_id = '1';
        $createUser->permission_id = '5';
        $createUser->timestamps = false;
        $createUser->save();   
        
        $createUser = new PermissionRole;
        $createUser->role_id = '1';
        $createUser->permission_id = '6';
        $createUser->timestamps = false;
        $createUser->save();   

        $createUser = new PermissionRole;
        $createUser->role_id = '2';
        $createUser->permission_id = '2';
        $createUser->timestamps = false;
        $createUser->save();
        
        $createUser = new PermissionRole;
        $createUser->role_id = '2';
        $createUser->permission_id = '3';
        $createUser->timestamps = false;
        $createUser->save(); 
        
        $createUser = new PermissionRole;
        $createUser->role_id = '2';
        $createUser->permission_id = '4';
        $createUser->timestamps = false;
        $createUser->save();         
        
        $createUser = new PermissionRole;
        $createUser->role_id = '3';
        $createUser->permission_id = '2';
        $createUser->timestamps = false;
        $createUser->save();  
        
        $createUser = new PermissionRole;
        $createUser->role_id = '3';
        $createUser->permission_id = '4';
        $createUser->timestamps = false;
        $createUser->save();         
    }
}

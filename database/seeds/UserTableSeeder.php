<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'fullname' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('12345678'),
                'gender' => 'M',
                'location' => 'Oslo,Norway',
                'website' => 'http://example.com',
                'remember_token' => null,
                'created_at' => '2016-08-29 13:42:19',
                'updated_at' => '2016-08-29 13:42:19',
            ),
           1 =>
            array (
                'id' => 2,
                'fullname' => 'Sally Sixpack',
                'username' => 'sally',
                'email' => 'sally@example.com',
                'password' => bcrypt('12345678'),
                'gender' => 'F',
                'location' => 'Oslo,Norway',
                'website' => 'http://example.com',
                'remember_token' => null,
                'created_at' => '2016-08-29 13:42:19',
                'updated_at' => '2016-08-29 13:42:19',
            ),     
           2 =>
            array (
                'id' => 3,
                'fullname' => 'John Doe',
                'username' => 'john',
                'email' => 'john@example.com',
                'password' => bcrypt('12345678'),
                'gender' => 'M',
                'location' => 'Oslo,Norway',
                'website' => 'http://example.com',
                'remember_token' => null,
                'created_at' => '2016-08-29 13:42:19',
                'updated_at' => '2016-08-29 13:42:19',
            ),             
        ));
    }
}

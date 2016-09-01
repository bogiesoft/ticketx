<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'site_name' => 'TicketX',
                'site_url' => 'http://example.com',
                'email_to' => 'admin@example.com',
                'email_from' => 'admin@example.com',
                'created_at' => '2016-08-29 13:42:19',
                'updated_at' => '2016-08-29 13:42:19',
            ),
     ));
    }
}
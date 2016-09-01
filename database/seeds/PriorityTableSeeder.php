<?php

use Illuminate\Database\Seeder;

use App\Priority;

class PriorityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createPriority = new Priority;
        $createPriority->name = 'Critical';
        $createPriority->save();
        
        $createPriority = new Priority;
        $createPriority->name = 'Normal';
        $createPriority->save();
        
        $createPriority = new Priority;
        $createPriority->name = 'Low';
        $createPriority->save();        
    }
}

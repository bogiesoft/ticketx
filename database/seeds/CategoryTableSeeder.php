<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createCategory = new Category();
        $createCategory->name = 'Technical';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Bug';
        $createCategory->save();

        $createCategory = new Category();
        $createCategory->name = 'Sales';
        $createCategory->save();
    }
}

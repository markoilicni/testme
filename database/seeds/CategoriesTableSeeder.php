<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //\App\Category::truncate();

        \App\Category::create(['name'=>'PHP', 'description'=>'General PHP questions']);
        \App\Category::create(['name'=>'CSS', 'description'=>'General CSS questions']);
        \App\Category::create(['name'=>'JavaScript', 'description'=>'General JavaScript questions']);
        \App\Category::create(['name'=>'PHP/Laravel']);
        \App\Category::create(['name'=>'JavaScript/jQuery']);
        \App\Category::create(['name'=>'JavaScript/AngulaJS']);
        \App\Category::create(['name'=>'JavaScript/Angular 2']);
        \App\Category::create(['name'=>'JavaScript/Ract']);
        \App\Category::create(['name'=>'CSS/Less']);
    }
}

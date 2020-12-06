<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Category::create([
            'name' => 'Electronics'
        ]);
        \App\Category::create([
            'name' => 'Furnitures'
        ]);
        \App\Category::create([
            'name' => 'Toiletries'
        ]);
        \App\Category::create([
            'name' => 'Food'
        ]);
        \App\Category::create([
            'name' => 'Drinks'
        ]);
        \App\Category::create([
            'name' => 'Tools'
        ]);
    }
}

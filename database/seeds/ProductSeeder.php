<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Product::create([
            'name'=> 'Iphone 12',
            'category_id'=> '1',
            'description'=> 'Ready Stock',
            'price' => '10000000',
            'image'=> '1.jpg'
        ]);
        \App\Product::create([
            'name'=> 'MacBook Pro 2020',
            'category_id'=> '1',
            'description'=> 'Ready Stock',
            'price' => '35000000',
            'image'=> '2.jpg'
        ]);

        \App\Product::create([
            'name'=> 'Iphone 12 max',
            'category_id'=> '1',
            'description'=> 'Ready Stock',
            'price' => '12000000',
            'image'=> '3.jpg'
        ]);

        \App\Product::create([
            'name'=> 'Iphone 12 max pro',
            'category_id'=> '1',
            'description'=> 'Ready Stock',
            'price' => '15000000',
            'image'=> '4.jpg'
        ]);


    }
}

<?php

use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\History::create([

            'transaction_id'=>'1',
            'product_id'=>'1',
            'quantity'=>'5'
        ]);
        \App\History::create([

            'transaction_id'=>'1',
            'product_id'=>'2',
            'quantity'=>'5'
        ]);

    }
}

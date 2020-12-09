<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
        'role' => 'Admin',
        'name'=> 'Velieko',
        'email'=> 'velieko@sokopedia.com',
        'password'=> Hash::make('12345')
        ]);
        \App\User::create([
            'role' => 'Admin',
            'name'=> 'Marcel',
            'email'=> 'marcel@sokopedia.com',
            'password'=> Hash::make('45678')
        ]);
        \App\User::create([
            'role' => 'User',
            'name'=> 'user1',
            'email'=> 'user1@sokopedia.com',
            'password'=> Hash::make('12345')
        ]);
        \App\User::create([
            'role' => 'User',
            'name'=> 'user2',
            'email'=> 'user2@sokopedia.com',
            'password'=> Hash::make('45678')
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;
use Stir\User;

class StirUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname'=> 'Guest',
            'lastname'=> 'User',
            'email'=> 'guest@example.com',
            'password' => bcrypt('welcome1$'),
            'type'=> 'guest',
        ]);

        User::create([
            'firstname'=> 'User',
            'lastname'=> 'User',
            'email'=> 'user@example.com',
            'password' => bcrypt('welcome1$')
        ]);

        User::create([
            'firstname'=> 'Admin',
            'lastname'=> 'User',
            'email'=> 'admin@example.com',
            'type'=> 'admin',
            'password' => bcrypt('welcome1$')
        ]);
    }
}

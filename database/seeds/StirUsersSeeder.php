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
            'name' => 'user',
            'email'=> 'user@example.com',
            'password' => bcrypt('welcome1$')
        ]);

        User::create([
            'name' => 'user1',
            'email'=> 'user1@example.com',
            'password' => bcrypt('welcome1$')
        ]);

        User::create([
            'name' => 'user2',
            'email'=> 'user2@example.com',
            'password' => bcrypt('welcome1$')
        ]);

        User::create([
            'name' => 'admin',
            'email'=> 'admin@example.com',
            'type'=> 'admin',
            'password' => bcrypt('welcome1$')
        ]);

        User::create([
            'name' => 'admin1',
            'email'=> 'admin1@example.com',
            'type'=> 'admin',
            'password' => bcrypt('welcome1$')
        ]);

        User::create([
            'name' => 'admin2',
            'email'=> 'admin2@example.com',
            'type'=> 'admin',
            'password' => bcrypt('welcome1$')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class StirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StirUsersSeeder::class);
        $this->call(StirFaqsSeeder::class);
    }
}

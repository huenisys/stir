<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class StirFaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Stir\Faq::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph,
        ]);

        Stir\Faq::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph,
        ]);

        Stir\Faq::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph.'?',
        ]);

        Stir\Faq::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph.'?',
        ]);

        Stir\Faq::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph,
        ]);
    }
}

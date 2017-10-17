<?php

use Faker\Generator as Faker;

$factory->define(\Stir\Faq::class, function (Faker $faker) {
    return [
          'question' => $faker->sentence,
          'answer' => $faker->paragraph
    ];
});

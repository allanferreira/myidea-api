<?php

use Faker\Generator as Faker;

$factory->define(App\Pitch::class, function (Faker $faker) {
    return [
        'subject' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'text' => $faker->text,
    ];
});

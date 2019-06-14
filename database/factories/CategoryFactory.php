<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Categorie::class, function (Faker $faker) use($factory) {
    return [
        'name' => $faker->word,
        'user_id' => $factory->create(App\User::class)->id,
    ];
});

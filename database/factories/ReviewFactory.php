<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Review::class, function (Faker $faker) use($factory) {
    return [

        'review'=>$faker->text,
        'product_id' => $factory->create(App\Models\Product::class)->id,
        'user_id' => $factory->create(App\User::class)->id,
    ];
});

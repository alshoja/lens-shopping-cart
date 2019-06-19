<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product_image::class, function (Faker $faker) use($factory) {
    return [
        'image'=>'s5.jpg',
        'product_id' => $factory->create(App\Models\Product::class)->id,
        'user_id' => $factory->create(App\User::class)->id,

    ];
});

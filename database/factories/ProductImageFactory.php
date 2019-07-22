<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product_image::class, function (Faker $faker) use($factory) {
    return [
        'image'=>'productImages/7PpKUNOeCFvgyaUjfeVSEbE1yIS1tby4jUFAptbu.png',
        'product_id' => $factory->create(App\Models\Product::class)->id,
        'user_id' => $factory->create(App\User::class)->id,

    ];
});

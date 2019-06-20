<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ProductType::class, function (Faker $faker) use($factory) {
    return [
        'type'=>$faker->word,
        'product_id' => $factory->create(App\Models\Product::class)->id,
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) use($factory) {
    return [
        'name'=>$faker->word,
        'amount'=>$faker->randomDigit,
        'old_price'=>$faker->randomDigit,
        'description'=>$faker->text,
        'stock'=>$faker->randomDigit,
        'star'=>'3',
        'user_id' => $factory->create(App\User::class)->id,
        'category_id' => $factory->create(App\Models\Categorie::class)->id,
        'in_flashSale'=>'0',

    ];
});

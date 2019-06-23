<?php

use Faker\Generator as Faker;

$factory->define(App\Models\FirstFooterFeature::class, function (Faker $faker) use($factory) {
    $icons = $faker->randomElement(['fab fa-affiliatetheme','fas fa-rocket','far fa-hand-paper']);
    $feature = random_int(1, 2);
    return [
        'heading'=>$faker->name,
        'icon'=>$faker->name($icons),
        'description'=>$faker->text,
        'url'=>$faker->url,
        'button_value'=>$faker->name,
        'feature_div'=>$feature,

    ];
});

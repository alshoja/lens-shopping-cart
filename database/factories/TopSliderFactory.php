<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TopSlider::class, function (Faker $faker) use($factory) {
    return [
        'image'=>'uploads/banner1.jpg',
        'main_heading'=>$faker->catchPhrase,
        'sub_heading'=>$faker->company,
        'order'=>$faker->randomDigitNotNull,
        'button_value'=>$faker->jobTitle,
    ];
});

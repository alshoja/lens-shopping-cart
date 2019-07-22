<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Menu::class, function (Faker $faker) {
    return [
        'title_one'=>$faker->name,
        'title_two'=>$faker->name,
        'image'=>'uploads/g1.jpg',
        'image_title'=>$faker->name,
    ];
});

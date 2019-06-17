<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Testimonial::class, function (Faker $faker) use($factory) {
    return [
        
        'customer_name'=>$faker->name,
        'country'=>$faker->country,
        'work'=>$faker->company,
        'description'=>$faker->text,
        // 'user_id' => $factory->create(App\User::class)->id,
    ];
});

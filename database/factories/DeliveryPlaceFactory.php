<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\DeliveryPlace;
use Faker\Generator as Faker;

$factory->define(DeliveryPlace::class, function (Faker $faker) use($factory) {
    return [
        'state'=>$faker->state,
        'district'=>$faker->city,
        'pincode'=>$faker->postcode,
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\DeliveryPlace;
use Faker\Generator as Faker;

$factory->define(DeliveryPlace::class, function (Faker $faker) {
    return [
        'state'=>$faker->state,
        'district'=>$faker->city,
        'pincode'=>$faker->postcode,
    ];
});

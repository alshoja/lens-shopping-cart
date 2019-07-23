<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(App\Models\Order::class, function (Faker $faker) use($factory) {
    return [      
        'customer_id' => $factory->create(App\User::class)->id,
        'staff_id' => $factory->create(App\User::class)->id,
        'order_amount' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 2),
        'order_status' =>$faker->randomElement(['Pending','Shipped','Cancelled']),
        'order_method' => $faker->randomElement(['Card','COD','NetBanking']),
        'shipping_address' => $faker->address,
        'shipping_date' => $faker->dateTime,
    ];
});

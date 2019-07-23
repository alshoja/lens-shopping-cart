<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Orderdetail;
use Faker\Generator as Faker;

$factory->define(App\Models\Orderdetail::class, function (Faker $faker) use($factory) {
    return [
        
      
        'order_id' => $factory->create(App\Models\Order::class)->id,
        'product_id' => $factory->create(App\Models\Product::class)->id,
        'quantity' => $factory->create(App\User::class)->id,
        'item_amount' =>  $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 2),
        
    ];
});

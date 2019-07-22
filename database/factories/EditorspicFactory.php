<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Editorspic::class, function (Faker $faker) use($factory) {
    $bool = (bool)random_int(0, 1);
    return [
        'heading'=>$faker->name,
        'image'=>'uploads/banner4.hpg',
        'hover_data'=>$faker->company,
        'is_Active'=>$bool
    ];
});

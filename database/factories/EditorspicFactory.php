<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Editorspic::class, function (Faker $faker) use($factory) {
    return [
        'heading'=>$faker->name,
        'image'=>$faker->imageUrl,
        'hover_data'=>$faker->company,
    ];
});

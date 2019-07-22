<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Partner::class, function (Faker $faker) {
    return [

        'name'=>$faker->name,
        'image'=>'uploads/team1.jpg',
        'position'=>$faker->jobTitle,
        'fb_link'=>'https://www.facebook.com/public/Fb-Login',
        'twitter_link'=>'https://www.twitter.com/',
        'insta_link'=>'https://www.instagram.com/accounts/login/?hl=en',
       
    ];
});

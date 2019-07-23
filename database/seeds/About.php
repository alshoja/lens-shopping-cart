<?php

use Illuminate\Database\Seeder;

class About extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'image' => 'uploads/banner1.jpg',
            'heading' => 'About',
            'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'button_value'=>"Shop",
            'link_url'=>"https://",
            'fb_url'=>"https://",
            'google_url'=>"https://",
            'twitter_url'=>"https://",
            'rss_link'=>"https://",
            'other'=>"https://"
        ]);
    }
}

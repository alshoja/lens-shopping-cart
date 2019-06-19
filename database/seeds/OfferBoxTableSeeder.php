<?php

use Illuminate\Database\Seeder;

class OfferBoxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer_boxes')->insert([
            'title' => 'Join our newsletter and get',
            'description' => '50% Off for your first Pair of Eye wear',
            'textbox_label' => 'Email address',
            'button_value' => 'Get 50% Off',
            'href_tittle' => 'No thanks I want to pay full Price',
            'href_url' => "https://technalatus.com/",
            'isActive'=>"0"
        ]);
    }
}

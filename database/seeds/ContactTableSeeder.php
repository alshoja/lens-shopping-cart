<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        DB::table('contacts')->insert([
            'phone' => '9961856654',
            'country_code' => '+91',
            'location' => '0926k 4th block building, king Avenue, New York City.',
            'email' => 'alshoja@gmail.com',
            'footer_subscribing_data' => 'By subscribing to our mailing list you will always get latest news and updates from us.',
            'rights_data' => "© 2018 Bookstore. All Rights Reserved",
            'rights_company_name'=>"Technalatus",
            'company_url'=>"https://technalatus.com/",
            'header_image' => 'uploads/banner-mid.jpg',
            'title' =>'WE LOVE TO DISCUSS YOUR IDEA',
            'map_iframe_data'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783'
                ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'store_name' => 'The Store',
            'default_email' => 'info@company.com',
            'gateway' => "payumoney",
            'gatway_key'=>"zzaasdw323",
            'gatway_salt'=>"kjshd7634",
          
        ]);
    }
}

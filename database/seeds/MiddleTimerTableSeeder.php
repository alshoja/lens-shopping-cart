<?php

use Illuminate\Database\Seeder;

class MiddleTimerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('middle_poster_timers')->insert([
            'poster_image' => 'banner-mid.jpg',
            'title' => 'Summer Flash sale',
            'timestamp' => '2019-06-19 10:14:27',
    
        ]);
    }
}

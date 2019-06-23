<?php

use Illuminate\Database\Seeder;

class TopSliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TopSlider::class, 3)->create();
    }
}

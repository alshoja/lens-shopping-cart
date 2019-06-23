<?php

use Illuminate\Database\Seeder;

class FirstFooterFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\FirstFooterFeature::class, 8)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductsImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product_image::class, 50)->create();
    }
}

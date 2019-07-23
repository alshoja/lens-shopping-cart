<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                UsersTableSeeder::class,
                ProductsTableSeeder::class,
                ProductsImageTableSeeder::class,
                CategoriesTableSeeder::class,
                TestimonialsTableSeeder::class,
                EditorsPicTableSeeder::class,
                FirstFooterFeatureTableSeeder::class,
                TopSliderTableSeeder::class,
                PartnerTableSeeder::class,
                About::class,
                OfferBoxTableSeeder::class,
                ContactTableSeeder::class,
                MiddleTimerTableSeeder::class,
                DeliveryTableSeeder::class,
                ProductTypeTableSeeder::class,
                ReviewTableSeeder::class,
                CreateMenusTableSeeder::class
            ]
        );
    }
}
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
                CategoriesTableSeeder::class,
                TestimonialsTableSeeder::class,
                EditorsPicTableSeeder::class,
                FirstFooterFeatureTableSeeder::class,
                TopSliderTableSeeder::class,
                PartnerTableSeeder::class,
                About::class,
                ProductsImageTableSeeder::class,
                OfferBoxTableSeeder::class,
                ContactTableSeeder::class,
                MiddleTimerTableSeeder::class,
                DeliveryTableSeeder::class,
                ProductTypeTableSeeder::class,
                ReviewTableSeeder::class,
                CreateMenusTableSeeder::class,
                OrderdetailsTableSeeder::class,
                OrdersTableSeeder::class
            ]
        );
    }
}

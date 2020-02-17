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
        $this->call(CountriesTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoriesProductTableSeeder::class);
        $this->call(ShippingMethodsTableSeeder::class);
        $this->call(ProductVariationsTypeTableSeeder::class);
        $this->call(ProductVariationsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
    }
}

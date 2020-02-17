<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class ShippingMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

            DB::table('shipping_methods')->insert([
                'name' => 'JNE',
                'price' => $faker->numberBetween($min = 1, $max = 100).'000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('shipping_methods')->insert([
                'name' => 'POS Indonesia',
                'price' => $faker->numberBetween($min = 1, $max = 100).'000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('shipping_methods')->insert([
                'name' => 'Ninja Express',
                'price' => $faker->numberBetween($min = 1, $max = 100).'000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('shipping_methods')->insert([
                'name' => 'TIKI',
                'price' => $faker->numberBetween($min = 1, $max = 100).'000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    }
}

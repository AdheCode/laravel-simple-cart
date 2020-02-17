<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  9,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  12,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  13,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  14,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  15,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  16,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('stocks')->insert([
                'quantity' => $faker->numberBetween($min = 1, $max = 20),
                'product_variation_id' =>  17,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    }
}

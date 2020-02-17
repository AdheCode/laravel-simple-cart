<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Faker\Factory as Faker;

class ProductVariationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

            DB::table('product_variations')->insert([
                'product_id' => 1,
                'name' => 'Kopi Luwak Merk A',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 1,
                'name' => 'Kopi Luwak Merk B',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  2,
                'product_variation_type_id' =>  2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 1,
                'name' => 'Kopi Luwak Merk C',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  3,
                'product_variation_type_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 2,
                'name' => 'Beras Merah Merk A',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 2,
                'name' => 'Beras Merah Merk B',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  2,
                'product_variation_type_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 3,
                'name' => 'Gula Pasir Merk A',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 3,
                'name' => 'Gula Pasir Merk B',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  2,
                'product_variation_type_id' =>  2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 3,
                'name' => 'Gula Pasir Merk C',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  3,
                'product_variation_type_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 4,
                'name' => 'Jaket Kulit Bandung',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 4,
                'name' => 'Jaket Kulit Jakarta',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  2,
                'product_variation_type_id' =>  2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 5,
                'name' => 'Celana Panjang Levis',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 6,
                'name' => 'Laptop Asus',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 7,
                'name' => 'Keyboard Gamer Logitech',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 8,
                'name' => 'Mouse Fantech',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 9,
                'name' => 'Sofa Kulit Unta',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 10,
                'name' => 'Lemari Kayu Jati',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('product_variations')->insert([
                'product_id' => 11,
                'name' => 'Kasur Spring Bed',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'order' =>  1,
                'product_variation_type_id' =>  3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    }
}

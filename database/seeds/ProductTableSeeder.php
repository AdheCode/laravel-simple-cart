<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

            DB::table('products')->insert([
                'name' => 'Kopi Luwak',
                'slug' => 'kopi-luwak',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Beras Merah',
                'slug' => 'beras-merah',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Gula Pasir',
                'slug' => 'gula-pasir',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Jaket Kulit',
                'slug' => 'jaket-kulit',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Celana Panjang',
                'slug' => 'celana-panjang',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Laptop',
                'slug' => 'laptop',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Keyboard Gamer',
                'slug' => 'keyboard-gamer',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Mouse Cantik',
                'slug' => 'mouse-cantik',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Sofa',
                'slug' => 'sofa',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Lemari Kayu',
                'slug' => 'lemari-kayu',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);

            DB::table('products')->insert([
                'name' => 'Kasur',
                'slug' => 'kasur',
                'price' =>  $faker->numberBetween($min = 1, $max = 100).'000',
                'description' =>  $faker->text,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
    }
}

<?php

use App\Product;
use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for($i=0; $i<=20; $i++) {
            Product::create([
                'name' => $faker->name,
                'price' => $faker->numberBetween(0,1000),
                'public' => $faker->boolean,
                'deleted' => $faker->boolean,
            ]);
        }

    }
}

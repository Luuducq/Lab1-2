<?php

// database/seeders/BooksTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB as FacadesDB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 100; $i++) {
            FacadesDB::table('books')->insert([
                'title' => $faker->sentence(3),
                'thumbnail' => $faker->imageUrl(),
                'author' => $faker->name(),
                'publisher' => $faker->company(),
                'publication' => $faker->dateTime(),
                'price' => $faker->randomFloat(2, 5, 100),
                'quantity' => $faker->numberBetween(1, 50),
                'category_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
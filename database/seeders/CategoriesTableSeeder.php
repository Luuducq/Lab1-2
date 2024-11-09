<?php

// database/seeders/CategoriesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        FacadesDB::table('categories')->insert([
            ['name' => 'Fiction'],
            ['name' => 'Non-Fiction'],
            ['name' => 'Science'],
            ['name' => 'History'],
            ['name' => 'Fantasy'],
        ]);
    }
}
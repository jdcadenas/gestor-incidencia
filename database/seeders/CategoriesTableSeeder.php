<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Categoría A1',
            'project_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'Categoría A2',
            'project_id' => 1
        ]);
        DB::table('categories')->insert([
            'name' => 'Categoría B1',
            'project_id' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Categoría B2',
            'project_id' => 2
        ]);
    }
}

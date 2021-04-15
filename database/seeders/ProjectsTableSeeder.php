<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('projects')->insert([
            'name'=>'Proyecto A',
            'description' =>'El proyecto A consiste en desarrollar un sitio web moderno'

        ]);
        DB::table('projects')->insert([
                'name'=>'Proyecto B',
                'description' =>'El proyecto B consiste en desarrollar una aplicacion móvil'

            ]);

    }
}

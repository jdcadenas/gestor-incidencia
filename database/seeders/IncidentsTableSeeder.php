<?php

namespace Database\Seeders;

use App\Models\Incident;
use Illuminate\Database\Seeder;

class IncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incident::create([
            'title'=>'Primera Incidencia',
            'description'=>'Lo que ocurre es que aparece un error en la página y esta se cerró.',
            'severity' =>'N',
            'category_id'=>2,
            'project_id'=>1,
            'level_id' =>1,
            'client_id'=>2,
            'support_id'=>3

        ]);
    }
}

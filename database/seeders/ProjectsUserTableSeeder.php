<?php

namespace Database\Seeders;

use App\Models\ProjectUser;
use Illuminate\Database\Seeder;

class ProjectsUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectUser::factory()->create([
            'project_id'=>1,
            'user_id'=>3,
            'level_id' =>1,

        ]);
        ProjectUser::factory()->create([
            'project_id'=>1,
            'user_id'=>4,
            'level_id' =>2,

        ]);
    }
}

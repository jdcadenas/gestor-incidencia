<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //support proyecto nivel 1
         User::factory()->create([ //3
            'name'=>'Soporte S1',
            'email'=>'support1@gmail.com',
            'password' =>bcrypt('123123'),
            'role'=>1
        ]);

        User::factory()->create([ //4
            'name'=>'Soporte S2',
            'email'=>'support2@gmail.com',
            'password' =>bcrypt('123123'),
            'role'=>1
        ]);

    }
}

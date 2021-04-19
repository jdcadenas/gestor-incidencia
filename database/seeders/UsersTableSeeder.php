<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
         //admin
        User::factory()->create([
            'name'=>'Juan',
            'email'=>'juangb.17@gmail.com',
            'password' =>bcrypt('123123'),
            'role'=>0
        ]);

        //admin
        User::factory()->create([
            'name'=>'Claudia',
            'email'=>'cliente@gmail.com',
            'password' =>bcrypt('123123'),
            'role'=>2
        ]);
}
}

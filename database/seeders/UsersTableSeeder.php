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
        //support
        User::factory()->create([
            'name'=>'María',
            'email'=>'support@gmail.com',
            'password' =>bcrypt('123123'),
            'role'=>1
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

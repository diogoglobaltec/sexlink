<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class popularDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'seedTeste',
            'email'=>'qualquercoisad@testeseed.com',
            'password'=>bcrypt('asdfasdf'),

        ]);
    }
}

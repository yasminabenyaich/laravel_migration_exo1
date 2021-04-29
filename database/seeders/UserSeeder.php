<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=> "Yasmina",
            "email"=> "yasmina@hotmail.com",
            "password"=>"teste",
            "created_at"=> now()
        ]);
        
        DB::table("users")->insert([
            "name"=> "Elias",
            "email"=> "Elias@hotmail.com",
            "password"=>"salutsalut",
            "created_at"=> now()
        ]);
            
        DB::table("users")->insert([
            "name"=> "Mahad",
            "email"=> "Mahad@hotmail.com",
            "password"=>"mdp",
            "created_at"=> now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("animaux")->insert([
            "name"=> "kangourou",
            "especes"=>"mammifère",
            "age"=>5,
            "ddn"=>"2015-04-09",
            "created_at"=> now()
        ]);
        DB::table("animaux")->insert([
            "name"=> "léopard",
            "especes"=>"mammifère",
            "age"=>7,
            "ddn"=>"2013-02-07",
            "created_at"=> now()
        ]);
        DB::table("animaux")->insert([
            "name"=> "chèvre",
            "especes"=>"mammifère",
            "age"=>3,
            "ddn"=>"2012-04-06",
            "created_at"=> now()
        ]);

    }
}

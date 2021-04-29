<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "auteur"=> "Salim",
            "date"=> "2021-03-5",
            "commentaire"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optio.",
            "ddn"=>"2015-04-09",
            "created_at"=> now()
        ]);
        DB::table("articles")->insert([
            "auteur"=> "Thomas",
            "date"=> "2021-07-7",
            "commentaire"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optio.",
            "ddn"=>"2015-04-09",
            "created_at"=> now()
        ]);
        DB::table("articles")->insert([
            "auteur"=> "Mufasah",
            "date"=> "2021-04-1",
            "commentaire"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optio.",
             "ddn"=>"2014-06-08",
            "created_at"=> now()
            
        ]);
        DB::table("articles")->insert([
            "auteur"=> "Gauthier",
            "date"=> "2021-11-25",
            "commentaire"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optio.",
            "ddn"=>"2015-04-09",
            "created_at"=> now()
        ]);
        DB::table("articles")->insert([
            "auteur"=> "Marie",
            "date"=> "2021-04-23",
            "commentaire"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
             temporibus reiciendis iure aliquid totam optio.",
            "ddn"=>"2015-04-09",
            "created_at"=> now()
        ]);
    }
}

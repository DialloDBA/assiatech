<?php

namespace Database\Seeders;

use App\Models\HeureOuverture;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeureOuvertureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeureOuverture::truncate();
        HeureOuverture::create([
            "jour"=>"Lundi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Mardi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Mercredi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Jeudi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Vendredi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Samedi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Dimanche",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1
        ]);
        HeureOuverture::create([
            "jour"=>"Lundi-Vendredi",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>2,
            "type"=>2,
        ]);
        HeureOuverture::create([
            "jour"=>"Samedi-Dimanche",
            "debut"=>"8h30",
            "fin"=>"00h30",
            "user_id"=>1,
            "type"=>2,
        ]);
    }
}

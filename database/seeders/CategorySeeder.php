<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::truncate();

        Category::create([
            'libelle_cat'=>'Ingénierie de Produits Logiciel',
            'slug_cat'=>str()->slug("Ingénierie de Produits Logiciel"),
            'unique'=>str()->slug("Ingénierie de Produits Logiciel"),
            'actived'=>'1',
            'user_id'=>1,
        ]);
        Category::create([
            'libelle_cat'=>'AQ et Ingénierie des Tests',
            'slug_cat'=>str()->slug("AQ et Ingénierie des Tests"),
            'unique'=>str()->slug("AQ et Ingénierie des Tests"),
            'actived'=>'1',
            'user_id'=>1,
        ]);
        Category::create([
            'libelle_cat'=>'CloudOps',
            'slug_cat'=>str()->slug("CloudOps"),
            'unique'=>str()->slug("CloudOps"),
            'actived'=>'1',
            'user_id'=>1,
        ]);
    }
}

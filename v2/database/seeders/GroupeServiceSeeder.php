<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\GroupeService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GroupeService::truncate();
        GroupeService::create([
            'libelle_groupe' => 'Ingénierie de Produits Logiciel',
            'slug_groupe' => Str::slug('Ingénierie de Produits Logiciel'),
            'unique' => Str::slug('Ingénierie de Produits Logiciel'),
            'actived' => '1',
            'migration' => '0',
            'online' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
        ]);

        GroupeService::create([
            'libelle_groupe' => 'AQ et Ingénierie des Tests',
            'slug_groupe' => Str::slug('AQ et Ingénierie des Tests'),
            'unique' => Str::slug('AQ et Ingénierie des Tests'),
            'actived' => '1',
            'migration' => '0',
            'online' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
        ]);

        GroupeService::create([
            'libelle_groupe' => 'CloudOps',
            'slug_groupe' => Str::slug('CloudOps'),
            'unique' => Str::slug('CloudOps'),
            'actived' => '1',
            'migration' => '0',
            'online' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
        ]);

        GroupeService::create([
            'libelle_groupe' => 'DevOps et SRE',
            'slug_groupe' => Str::slug('DevOps et SRE'),
            'unique' => Str::slug('DevOps et SRE'),
            'actived' => '1',
            'migration' => '0',
            'online' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
        ]);
    }
}

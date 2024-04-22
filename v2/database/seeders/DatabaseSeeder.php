<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::truncate();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            "password"=>Hash::make("12345"),
        ]);

        

        
        // $this->call(UserSeeder::class);
        $this->call(InformationSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(GroupeServiceSeeder::class);
        $this->call(HeureOuvertureSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}

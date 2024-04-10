<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::create([
            "name"=>"DIAB",
            "username"=>"DIAB",
            "email"=>"diallodba@assiatech.com",
            "telephone"=>"+224621939302",
            "password"=>Hash::make("12345"),
        ]);
    }
}

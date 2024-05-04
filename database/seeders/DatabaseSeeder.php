<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Hasan',
            'email' => 'dev.hasanalmamun@gmail.com',
            'password' => 'hasan1234'
        ]);

        Feature::create([
            'name' => 'Calculate Sum',
            'description' => ' Calculate sum of two numbers',
            'image' => 'https://static-00.iconduck.com/assets.00/plus-icon-2048x2048-z6v59bd6.png',
            'required_credits' => 1,
            'route_name' => 'feature1.index',
            'active' => true,
        ]);

        Feature::create([
            'name' => 'Calculate Difference',
            'description' => ' Calculate difference of two numbers',
            'image' => 'https://cdn-icons-png.flaticon.com/512/2569/2569198.png',
            'required_credits' => 3,
            'route_name' => 'feature2.index',
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500
        ]);
    }
}

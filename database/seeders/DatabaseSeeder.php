<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cat;
use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        #User::factory(10)->create();
        User::factory(10)->create();
        Cat::factory(10)->create();
        Car::factory(10)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            // 'pwd' => 'password',
        ]);
        */
    }
}

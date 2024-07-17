<?php

namespace Database\Seeders;

use App\Models\project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'ammar',
            'email' => 'ammar@ammar.com',
            'password' => bcrypt('1234'),
        ]);


        project::factory()->count(30)->hasTasks(30)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create default user
        User::factory()->create([
            'name' => 'zabeer',
            'email' => 'binzabirtareq@gmail.com',
            'password' => Hash::make('midland353@'),
        ]);

        // Call the SkillSeeder
        $this->call([
            SkillSeeder::class,
            ExperienceSeeder::class,
           ProjectSeeder::class,
        ]);
    }
}

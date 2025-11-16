<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('skills')->insert([
            [
                'name' => 'PHP',
                'percent' => 85,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Laravel',
                'percent' => 80,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'JavaScript',
                'percent' => 75,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'React',
                'percent' => 70,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'MySQL',
                'percent' => 78,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Deployment(Shared Hosting)',
                'percent' => 78,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'CI/CD(Hostinger)',
                'percent' => 100,
                'created_at' => $now,
                'updated_at' => $now,
            ],
          
            [
                'name' => 'pusher js',
                'percent' => 30,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}

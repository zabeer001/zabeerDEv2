<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('experiences')->insert([
            [
                'title' => 'Laravel Developer',
                'company_and_address' => 'BdCalling, Dhaka, Bangladesh',
                'des' => 'Worked on API development, dynamic task management systems, and email notifications using Laravel.',
                'time_period' => '2024(dec) - now',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Php Developer (Part Time)',
                'company_and_address' => 'Intellisensecloud, Miami - Florida, USA',
                'des' => 'wordpress plugin developer , worked on multiple projects, and developed custom plugins for clients.',
                'time_period' => '2025(Feb) - now',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'PHP Developer Intern',
                'company_and_address' => 'Techjodo Ltd.',
                'des' => 'Completed a one-month internship on PHP. Learned backend fundamentals and deployment.',
                'time_period' => '2023(dec) - 2024(jun)',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}

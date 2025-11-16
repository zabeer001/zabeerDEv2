<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'AirBooking System',
            'description' => 'This is a air booking system. It allows users to book flights and manage their bookings built in Php laravel',
            'image' => 'nordouestairways.png',
            'live_link'=>'https://www.nord-ouestairways.com'
        ]);

        Project::create([
            'name' => 'Donation Project',
            'description' => 'This is a education based project. It allows users to donate money to education and manage their donations. I made a custom plugin here to extend some features like top Donors.',
            'image' => 'eforcefoundation.png',
            'live_link'=>'https://eforcefoundation.org'
        ]);

        Project::create([
            'name' => 'Project Gamma',
            'description' => 'Something amazing about Project Gamma.',
            'image' => null, // no image
        ]);
    }
}

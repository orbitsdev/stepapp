<?php

namespace Database\Seeders;

use App\Models\Walk;
use App\Models\WalkActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalkActvitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $walk = Walk::first(); // Assumi
        $activities = [
            ['walk_id' => $walk->id, 'title' => 'Call for Startup'], // Walk ID 1
            ['walk_id' => $walk->id, 'title' => 'Reverse pitching'], // Walk ID 1
            ['walk_id' => $walk->id, 'title' => 'Hackathon'],        // Walk ID 2
            ['walk_id' => $walk->id, 'title' => 'Roadshows'],        // Walk ID 2
            ['walk_id' => $walk->id, 'title' => 'TechVangelization'],// Walk ID 3
            ['walk_id' => $walk->id, 'title' => 'Curriculum Integration (Capstone/Thesis/OJT)'], // Walk ID 3
        ];
        foreach ($activities as $activity) {
            WalkActivity::create($activity);
        }
    }
}

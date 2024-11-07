<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalkActvitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            ['walk_id' => 1, 'title' => 'Call for Startup'], // Walk ID 1
            ['walk_id' => 1, 'title' => 'Reverse pitching'], // Walk ID 1
            ['walk_id' => 1, 'title' => 'Hackathon'],        // Walk ID 2
            ['walk_id' => 1, 'title' => 'Roadshows'],        // Walk ID 2
            ['walk_id' => 1, 'title' => 'TechVangelization'],// Walk ID 3
            ['walk_id' => 1, 'title' => 'Curriculum Integration (Capstone/Thesis/OJT)'], // Walk ID 3
        ];
    }
}

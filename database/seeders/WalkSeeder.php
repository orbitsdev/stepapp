<?php

namespace Database\Seeders;

use App\Models\Walk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Walk::create([
            'title' => 'WALK: PRE-INCUBATION',
            'content' => 'The Walk pre-incubation program will be done for four (4) to (9) months in a particular cohort. In this phase, the TBI will design activities to support potential entrepreneurs in shaping their ideas.
In this stage of preparing the startup for incubation, the TBI will tap mentors, faculty members, researchers (both students and faculty), alumni, and industry players and experts for the training and seminar workshops. Incubatees qualified for pre-incubation can use the TBI facility free of charge during the program. Here are the privileges and/or activities:',
            'is_default' => true,
        ]);
    }
}

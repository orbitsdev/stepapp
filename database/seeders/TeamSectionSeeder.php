<?php

namespace Database\Seeders;

use App\Models\AdvisoryBoard;
use App\Models\TeamSection;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamSection::create([
            'title' => 'MEET OUR TEAM',
            'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected humour',
            'is_default' => true,
        ]);
    }
}

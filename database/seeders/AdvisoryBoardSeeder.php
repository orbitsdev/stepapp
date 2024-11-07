<?php

namespace Database\Seeders;

use App\Models\AdvisoryBoard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdvisoryBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdvisoryBoard::create([
            'target' => 'STEP APP TBI',
            'title' => 'ADVISORY BOARD',
            'content' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some form, by injected humour',
            'is_default' => true,
        ]);
    }
}

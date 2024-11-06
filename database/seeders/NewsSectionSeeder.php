<?php

namespace Database\Seeders;

use App\Models\NewsSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsSection::create([
            'title'=> 'Recent News',
            'description'=> 'Read the latest happening in STEPAPP',
            'is_default'=> true,
         ]);
    }
}

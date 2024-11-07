<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\ModuleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModuleType::create([
            'title'=> 'MANDATORY',
        ]);

        ModuleType::create([
            'title'=> 'ELECTIVE',
        ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Run;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Run::create([
            'title' => 'RUN – POST-INCUBATION',
            'content' => 'After the incubation phase, the startup company is independent and qualifies for the Run post-incubation phase. During this stage, the TBI still assists the entrepreneur from the startup to the expansion or maturity of the company. This is also the phase where the company/startup will leave the incubator. Here are the privileges and/or activities:',
            'is_default' => true,
        ]);
    }
}

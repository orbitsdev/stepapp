<?php

namespace Database\Seeders;

use App\Models\Run;
use App\Models\RunActivity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RunActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $run = Run::first(); // Assumi
        $activities = [
            ['title' => 'Legal Contracts (Royalty, Clients)', 'run_id' => $run->id],
            ['title' => 'Monitoring and Evaluation of Start-up status', 'run_id' => $run->id],
            ['title' => 'Investors Forum', 'run_id' => $run->id],
            ['title' => 'Exhibit/Trade fares', 'run_id' => $run->id],
            ['title' => 'Business Registration', 'run_id' => $run->id],
            ['title' => 'IP Protections', 'run_id' => $run->id],
            ['title' => 'Scale-up Program', 'run_id' => $run->id],
            ['title' => 'Return Service', 'run_id' => $run->id],
        ];

        foreach ($activities as $activity) {
            RunActivity::create($activity);
        }
    }
}

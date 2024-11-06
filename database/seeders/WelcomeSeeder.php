<?php

namespace Database\Seeders;

use App\Models\Welcome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Welcome::create([
            'title'=> 'WELCOME TO STEP APP TB',
            'description'=> 'The Sultan Kudarat State University (SKSU), through its partnership with the Department of Science and Technology (DOST), has established the STEPAPP Technology Business Incubator (TBI) under the program titled "Establishment of SKSU-Technology Business Incubation (SKSU-TBI) Sustainable Technopreneurship Ecosystem for the Promotion and Advancement of Promising Products (STEP APP)." This initiative is housed at the SKSU ACCESS Campus in Tacurong City, Sultan Kudarat.',
            'is_default'=> true,
         ]);
    }
}

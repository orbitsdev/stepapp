<?php

namespace Database\Seeders;

use App\Models\Jog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jog::create([
            'title' => 'JOG: INCUBATION',
            'content' => 'The Jog incubation program will be conducted within one year, including the pre-incubation period.  The incubatees are required to submit a Business Plan so they can move to the incubation phase. The Selection Panel will evaluate the Business Plan. Support is given by the TBI to the entrepreneur in setting up the startup and building up their initial customer. Here are the privileges and/or activities by module:',
            'is_default' => true,
            'note'=> 'Note:
All startup incubatees must comply with the mandatory modules and will be assessed whether or not to take the elective modules.
 ',
'final'=> 'GRADUATION'
        ]);
    }
}

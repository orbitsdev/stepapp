<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'copy_right'=> 'WELCOME TO STEP APP TB',
            'powered_by'=> 'WELCOME TO STEP APP TB',
            'content'=> 'STEP APP TBI is funded through a grant received by Sultan Kudarat State University under the Higher Education Institution Readiness for Innovation and Technopreneruship (HEIRIT) Program of DOST',
            'is_default'=> true,
         ]);
    }
}

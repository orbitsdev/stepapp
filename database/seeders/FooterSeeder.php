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
            'copy_right'=> '© 2024 STEP APP TBI',
            'powered_by'=> 'Partnership project by',
            'phone'=> 'Partnership project by',
            'facebook'=> 'https://www.facebook.com/DOSTTBISTEPAPP',
            'instagram'=> 'https://www.instagram.com/tbistepapp',
            'tiktok'=> 'https://www.tiktok.com/@tbistepapp?',
            'email'=> 'https://mail.google.com/mail/?view=cm&fs=1&to=tbistepapp@sksu.edu.ph',
            'content'=> 'STEP APP TBI is funded through a grant received by Sultan Kudarat State University under the Higher Education Institution Readiness for Innovation and Technopreneruship (HEIRIT) Program of DOST',
            'is_default'=> true,
         ]);
    }
}

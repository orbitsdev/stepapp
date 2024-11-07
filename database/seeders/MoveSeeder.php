<?php

namespace Database\Seeders;

use App\Models\Move;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Move::create([
            'title' => 'MOVE It Incubation Program',
            'content' => 'The Incubation Program developed by the DOST-SKSU STEP APP TBI represents a comprehensive and tailored approach to nurturing Technology Innovation and Entrepreneurship within the institution and the communities it serves. This integrated framework has been meticulously designed to provide aspiring Technology Entrepreneurs, or "Tech Incubatees," with the knowledge, skills, resources, and support needed to succeed in the dynamic world of technology startups.The STEP APP TBI Incubation Program\'s flagship brand is the MOVE IT Program. MOVE IT (Maximizing Output Value Through Engaging and Innovative Technopreneurship) Program is meticulously structured, encompassing distinct phases - Pre-incubation (WALK), Incubation (JOG), and Post-incubation (RUN) - each designed to provide aspiring tech incubatees with the essential knowledge, skills, resources, and support necessary to thrive in the ever-changing landscape of technology startups. 
            This integrated framework not only equips incubatees with the necessary tools for success but also fosters a culture of innovation, collaboration, and sustainable growth, thereby positioning DOST-SKSU STEP APP TBI as a catalyst for socioeconomic development and technological advancement within the region and beyond. Through this Incubation Program, STEP APP TBI is committed to empowering a new generation of tech innovators and entrepreneurs, driving positive change, and ushering in a future defined by innovation and prosperity.',
            'is_default' => true,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Incubation Space',
                'description' => 'Access to fully equipped office spaces, co-working areas, and laboratories to work on your innovative ideas.',
            ],
            [
                'title' => 'Mentorship and Guidance',
                'description' => 'One-on-one mentorship from experienced entrepreneurs, industry experts, and professionals to provide valuable insights and advice.',
            ],
            [
                'title' => 'Business Development Support',
                'description' => 'Assistance in developing business plans, market research, and strategies to ensure your startup is on the right track.',
            ],
            [
                'title' => 'Funding Assistance',
                'description' => 'Help in identifying funding opportunities, connecting with investors, and preparing funding proposals to secure financial support.',
            ],
            [
                'title' => 'Networking and Linkages',
                'description' => 'Networking opportunities with other startups, potential partners, investors, and industry leaders to build meaningful connections.',
            ],
            [
                'title' => 'Workshops and Training',
                'description' => 'Specialized workshops and training sessions on various topics like entrepreneurship, technology trends, marketing, and more.',
            ],
            [
                'title' => 'Legal and Regulatory Assistance',
                'description' => 'Guidance on legal matters, intellectual property protection, and compliance to ensure your business is operating smoothly.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}

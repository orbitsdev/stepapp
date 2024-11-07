<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'title' => 'Introduction to Technology Business Incubation and Assessment',
            'type' => 'MANDATORY',
            'description' => 'Launching of Cohort and Mentors (MOA Signing), Needs Assessment, Mentor matching, Keynote Speeches.',
        ]);

        Module::create([
            'title' => 'BMC',
            'type' => 'MANDATORY',
            'description' => 'Includes Customer Segments, Value Propositions, Channels, Customer Relationship, Revenue Streams, Key Resources, Key Activities, Key Partners, Cost. Output: Complete BMC.',
        ]);

        Module::create([
            'title' => 'Technology Innovation and Product Development',
            'type' => 'MANDATORY',
            'description' => 'Agile Development, Minimum Viable Product (MVP), User Experience Design, Halal Processes and Practices. Output: Prototype, User Experience Sheet, Survey Questionnaire.',
        ]);

        Module::create([
            'title' => 'Legal and Regulatory Considerations',
            'type' => 'MANDATORY',
            'description' => 'Includes Legal Structures, Compliance Requirements, Data Privacy Laws, Contracts, Intellectual Property Protection. Output: Contracts, IP Protection.',
        ]);

        // Elective Modules
        Module::create([
            'title' => 'Scaling Technology Ventures',
            'type' => 'ELECTIVE',
            'description' => 'Expanding Into New Markets, Managing Growth, Hiring Talent, Operational Scaling. Output: Roadmap, Sustainability Plan.',
        ]);

        Module::create([
            'title' => 'Funding and Investment in Technology Ventures',
            'type' => 'ELECTIVE',
            'description' => 'Funding Options for Startups, Financial Management, Linkages to funding institutions/agencies. Output: Funding Proposal, Pitch deck.',
        ]);

        Module::create([
            'title' => 'Marketing Tech Products/Services',
            'type' => 'ELECTIVE',
            'description' => 'Digital Marketing, Content Strategies, Branding. Output: Marketing Plan, Branding Standard.',
        ]);

        Module::create([
            'title' => 'Ethics, Social Responsibility, and Cultural Sensitivity',
            'type' => 'ELECTIVE',
            'description' => 'Output: Corporate Social Responsibility Plan.',
        ]);
    }
}

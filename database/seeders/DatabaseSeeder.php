<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\JobSeeder;
use Database\Seeders\RunSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\MoveSeeder;
use Database\Seeders\WalkSeeder;
use Database\Seeders\FooterSeeder;
use Database\Seeders\ModuleSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\WelcomeSeeder;
use Database\Seeders\ModuleTypeSeeder;
use Database\Seeders\RunActivitySeeder;
use Database\Seeders\WalkActvitySeeder;
use Database\Seeders\AdvisoryBoardSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            WelcomeSeeder::class,
            NewsSectionSeeder::class,
            FooterSeeder::class,
            MoveSeeder::class,
            WalkSeeder::class,
            WalkActvitySeeder::class,
            JogSeeder::class,
            ModuleTypeSeeder::class,
            ModuleSeeder::class,
            RunSeeder::class,
            RunActivitySeeder::class,
            ServiceSeeder::class,
            AdvisoryBoardSeeder::class,
            TeamSectionSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

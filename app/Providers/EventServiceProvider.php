<?php

namespace App\Providers;

use App\Models\AdvisoryBoard;
use App\Models\Jog;
use App\Models\Run;
use App\Models\Move;
use App\Models\Walk;
use App\Models\Welcome;
use App\Models\NewsSection;
use App\Models\TeamSection;
use App\Observers\AdvisoryBoardObserver;
use App\Observers\JogObserver;
use App\Observers\RunObserver;
use App\Observers\MoveObserver;
use App\Observers\WalkObserver;
use App\Observers\WelcomeObserver;
use App\Observers\NewSectionObserver;
use Illuminate\Support\Facades\Event;
use App\Observers\NewsSectionObserver;
use Database\Seeders\TeamSectionSeeder;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Welcome::observe(WelcomeObserver::class);
        NewsSection::observe(NewsSectionObserver::class);
        Move::observe(MoveObserver::class);
        Walk::observe(WalkObserver::class);
        Jog::observe(JogObserver::class);
        Run::observe(RunObserver::class);
        AdvisoryBoard::observe(AdvisoryBoardObserver::class);
        TeamSection::observe(TeamSectionSeeder::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

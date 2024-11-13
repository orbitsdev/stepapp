<?php

namespace App\Providers;

use App\Services\RouteManager;
use Filament\Support\Assets\Css;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentColor;
use Filament\Support\View\Components\Modal;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('routemanager', function ($app) {
            return new RouteManager();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Model::unguard();
        FilamentColor::register([

            'primary' => "#006082",



        ]);


// FilamentAsset::register([
//     Css::make('custom-stylesheet', __DIR__ . '/../../resources/css/app.css'),
// ]);

        Modal::closedByClickingAway(false);
    }
}

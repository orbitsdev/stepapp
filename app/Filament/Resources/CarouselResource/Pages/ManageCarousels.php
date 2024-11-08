<?php

namespace App\Filament\Resources\CarouselResource\Pages;

use Filament\Actions;
use Filament\Actions\StaticAction;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\CarouselResource;

class ManageCarousels extends ManageRecords
{
    protected static string $resource = CarouselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('carousel.png'),
            Actions\CreateAction::make()->modalWidth('5xl')->createAnother(false),


        ];
    }
}

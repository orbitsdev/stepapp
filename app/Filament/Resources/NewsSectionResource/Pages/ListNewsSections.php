<?php

namespace App\Filament\Resources\NewsSectionResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\NewsSectionResource;

class ListNewsSections extends ListRecords
{
    protected static string $resource = NewsSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('new-section.png'),
            Actions\CreateAction::make()->label('Create New')->createAnother(false),
        ];
    }
}

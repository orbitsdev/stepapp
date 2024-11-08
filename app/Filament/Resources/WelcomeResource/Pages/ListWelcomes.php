<?php

namespace App\Filament\Resources\WelcomeResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\WelcomeResource;

class ListWelcomes extends ListRecords
{
    protected static string $resource = WelcomeResource::class;


    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('welcome.png'),
            Actions\CreateAction::make()->label('Create New')->createAnother(false),
        ];
    }
}

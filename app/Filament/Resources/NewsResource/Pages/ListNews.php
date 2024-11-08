<?php

namespace App\Filament\Resources\NewsResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use App\Filament\Resources\NewsResource;
use Filament\Resources\Pages\ListRecords;

class ListNews extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('new-section.png'),
            Actions\CreateAction::make()->label('Create News')->createAnother(false),
        ];
    }
}

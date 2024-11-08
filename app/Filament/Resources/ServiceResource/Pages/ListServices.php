<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ServiceResource;

class ListServices extends ListRecords
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('services.png'),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\RunResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use App\Filament\Resources\RunResource;
use Filament\Resources\Pages\ListRecords;

class ListRuns extends ListRecords
{
    protected static string $resource = RunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('run.png'),
            Actions\CreateAction::make(),
        ];
    }
}

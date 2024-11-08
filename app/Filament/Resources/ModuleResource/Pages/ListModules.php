<?php

namespace App\Filament\Resources\ModuleResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ModuleResource;

class ListModules extends ListRecords
{
    protected static string $resource = ModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('jog.png'),
            Actions\CreateAction::make(),
        ];
    }
}

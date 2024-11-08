<?php

namespace App\Filament\Resources\MoveResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use App\Filament\Resources\MoveResource;
use Filament\Resources\Pages\ManageRecords;

class ManageMoves extends ManageRecords
{
    protected static string $resource = MoveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('move.png'),
            Actions\CreateAction::make()->modalWidth('5xl')->createAnother(false),

        ];
    }
}

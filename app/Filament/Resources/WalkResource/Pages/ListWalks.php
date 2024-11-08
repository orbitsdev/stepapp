<?php

namespace App\Filament\Resources\WalkResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use App\Filament\Resources\WalkResource;
use Filament\Resources\Pages\ListRecords;

class ListWalks extends ListRecords
{
    protected static string $resource = WalkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('walk.png'),
            Actions\CreateAction::make(),
        ];
    }
}

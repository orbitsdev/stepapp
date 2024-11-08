<?php

namespace App\Filament\Resources\JogResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use App\Filament\Resources\JogResource;
use Filament\Resources\Pages\ListRecords;

class ListJogs extends ListRecords
{
    protected static string $resource = JogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('jog.png'),
            Actions\CreateAction::make(),
        ];
    }
}

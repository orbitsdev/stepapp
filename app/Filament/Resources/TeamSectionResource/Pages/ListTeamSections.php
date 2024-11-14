<?php

namespace App\Filament\Resources\TeamSectionResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TeamSectionResource;

class ListTeamSections extends ListRecords
{
    protected static string $resource = TeamSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('advisory-board.png'),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AdvisoryBoardResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AdvisoryBoardResource;

class ListAdvisoryBoards extends ListRecords
{
    protected static string $resource = AdvisoryBoardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('advisory-board.png'),
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\JogResource\Pages;

use App\Filament\Resources\JogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJogs extends ListRecords
{
    protected static string $resource = JogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\MoveResource\Pages;

use App\Filament\Resources\MoveResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMoves extends ManageRecords
{
    protected static string $resource = MoveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->modalWidth('5xl')->createAnother(false),
            
        ];
    }
}

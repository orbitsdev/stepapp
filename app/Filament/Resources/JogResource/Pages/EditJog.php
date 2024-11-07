<?php

namespace App\Filament\Resources\JogResource\Pages;

use App\Filament\Resources\JogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJog extends EditRecord
{
    protected static string $resource = JogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

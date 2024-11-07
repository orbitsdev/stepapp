<?php

namespace App\Filament\Resources\WalkResource\Pages;

use App\Filament\Resources\WalkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWalk extends EditRecord
{
    protected static string $resource = WalkResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TeamSectionResource\Pages;

use App\Filament\Resources\TeamSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeamSection extends EditRecord
{
    protected static string $resource = TeamSectionResource::class;

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

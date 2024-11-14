<?php

namespace App\Filament\Resources\TeamSectionResource\Pages;

use App\Filament\Resources\TeamSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeamSection extends CreateRecord
{
    protected static string $resource = TeamSectionResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

<?php

namespace App\Filament\Resources\WelcomeResource\Pages;

use App\Filament\Resources\WelcomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWelcome extends EditRecord
{
    protected static string $resource = WelcomeResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}

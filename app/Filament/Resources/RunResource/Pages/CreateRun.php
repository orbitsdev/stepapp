<?php

namespace App\Filament\Resources\RunResource\Pages;

use App\Filament\Resources\RunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRun extends CreateRecord
{
    protected static string $resource = RunResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

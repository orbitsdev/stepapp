<?php

namespace App\Filament\Resources\GlobalPartnerResource\Pages;

use App\Filament\Resources\GlobalPartnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGlobalPartners extends ManageRecords
{
    protected static string $resource = GlobalPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->modalWidth('5xl')->createAnother(false),
        ];
    }
}

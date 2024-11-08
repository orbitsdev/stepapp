<?php

namespace App\Filament\Resources\GlobalPartnerResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\GlobalPartnerResource;

class ManageGlobalPartners extends ManageRecords
{
    protected static string $resource = GlobalPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('partners.png'),

            Actions\CreateAction::make()->modalWidth('5xl')->createAnother(false),
        ];
    }
}

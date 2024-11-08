<?php

namespace App\Filament\Resources\FooterResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use App\Filament\Resources\FooterResource;
use Filament\Resources\Pages\ManageRecords;

class ManageFooters extends ManageRecords
{
    protected static string $resource = FooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('footer.png'),
            Actions\CreateAction::make()->modalWidth('5xl')->createAnother(false),
        ];
    }
}

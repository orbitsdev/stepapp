<?php

namespace App\Filament\Resources\AdvisoryMemberResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\AdvisoryMemberResource;

class ManageAdvisoryMembers extends ManageRecords
{
    protected static string $resource = AdvisoryMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('advisory-member.png'),
            Actions\CreateAction::make()->modalWidth('7xl'),
        ];
    }
}

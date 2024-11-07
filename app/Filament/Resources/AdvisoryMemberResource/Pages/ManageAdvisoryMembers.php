<?php

namespace App\Filament\Resources\AdvisoryMemberResource\Pages;

use App\Filament\Resources\AdvisoryMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAdvisoryMembers extends ManageRecords
{
    protected static string $resource = AdvisoryMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

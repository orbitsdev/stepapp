<?php

namespace App\Filament\Resources\TeamMemberResource\Pages;

use Filament\Actions;
use App\Http\Controllers\GlobaAction;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\TeamMemberResource;

class ManageTeamMembers extends ManageRecords
{
    protected static string $resource = TeamMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            GlobaAction::make('team-member.png'),
            Actions\CreateAction::make(),
        ];
    }
}

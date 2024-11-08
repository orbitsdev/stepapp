<?php

namespace App\Http\Controllers;


use Filament\Actions\Action;
use Illuminate\Http\Request;
use Filament\Actions\StaticAction;
use Illuminate\Contracts\View\View;


class GlobaAction extends Controller
{

    public static function make(string $path): Action
    {
        return Action::make('Refference')
            ->modalSubmitAction(false)
            ->modalContent(fn (): View => view(
                'livewire.view-target-section',
                ['path' => $path],
            ))
            ->modalCancelAction(fn (StaticAction $action) => $action->label('Close'))
            ->closeModalByClickingAway(false)->modalWidth('7xl');
    }
}

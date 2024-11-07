<?php

namespace App\Observers;

use App\Models\Move;

class MoveObserver
{
    /**
     * Handle the Move "created" event.
     */
    public function created(Move $move): void
    {
        Move::where('id', '!=', $move->id)
            ->update(['is_default' => false]);
    }

    /**
     * Handle the Move "updated" event.
     */
    public function updated(Move $move): void
    {
        //
    }

    /**
     * Handle the Move "deleted" event.
     */
    public function deleted(Move $move): void
    {
        //
    }

    /**
     * Handle the Move "restored" event.
     */
    public function restored(Move $move): void
    {
        //
    }

    /**
     * Handle the Move "force deleted" event.
     */
    public function forceDeleted(Move $move): void
    {
        //
    }
}

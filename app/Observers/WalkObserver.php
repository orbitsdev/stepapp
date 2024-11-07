<?php

namespace App\Observers;

use App\Models\Walk;

class WalkObserver
{
    /**
     * Handle the Walk "created" event.
     */
    public function created(Walk $walk): void
    {
        Walk::where('id', '!=', $walk->id)
        ->update(['is_default' => false]);
    }

    /**
     * Handle the Walk "updated" event.
     */
    public function updated(Walk $walk): void
    {
        //
    }

    /**
     * Handle the Walk "deleted" event.
     */
    public function deleted(Walk $walk): void
    {
        //
    }

    /**
     * Handle the Walk "restored" event.
     */
    public function restored(Walk $walk): void
    {
        //
    }

    /**
     * Handle the Walk "force deleted" event.
     */
    public function forceDeleted(Walk $walk): void
    {
        //
    }
}

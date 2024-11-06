<?php

namespace App\Observers;

use App\Models\Welcome;

class WelcomeObserver
{
    /**
     * Handle the Welcome "created" event.
     */
    public function creating(Welcome $welcome): void
    {

        Welcome::where('id', '!=', $welcome->id)
        ->update(['is_default' => false]);
        


    }

    /**
     * Handle the Welcome "updated" event.
     */
    public function updated(Welcome $welcome): void
    {

    }

    /**
     * Handle the Welcome "deleted" event.
     */
    public function deleted(Welcome $welcome): void
    {
        //
    }

    /**
     * Handle the Welcome "restored" event.
     */
    public function restored(Welcome $welcome): void
    {
        //
    }

    /**
     * Handle the Welcome "force deleted" event.
     */
    public function forceDeleted(Welcome $welcome): void
    {
        //
    }

    protected function ensureSingleDefault(Welcome $welcome): void
    {
        // If the current record is marked as default, set all others to non-default
        if ($welcome->is_default) {
            Welcome::where('id', '!=', $welcome->id)
                ->update(['is_default' => false]);
        }
    }
}

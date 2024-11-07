<?php

namespace App\Observers;

use App\Models\Jog;

class JogObserver
{
    /**
     * Handle the Jog "created" event.
     */
    public function created(Jog $jog): void
    {
        Jog::where('id', '!=', $jog->id)
            ->update(['is_default' => false]);
    }

    /**
     * Handle the Jog "updated" event.
     */
    public function updated(Jog $jog): void
    {
        //
    }

    /**
     * Handle the Jog "deleted" event.
     */
    public function deleted(Jog $jog): void
    {
        //
    }

    /**
     * Handle the Jog "restored" event.
     */
    public function restored(Jog $jog): void
    {
        //
    }

    /**
     * Handle the Jog "force deleted" event.
     */
    public function forceDeleted(Jog $jog): void
    {
        //
    }
}

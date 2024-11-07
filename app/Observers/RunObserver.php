<?php

namespace App\Observers;

use App\Models\Run;

class RunObserver
{
    /**
     * Handle the Run "created" event.
     */
    public function created(Run $run): void
    {
        Run::where('id', '!=', $run->id)
        ->update(['is_default' => false]);
    }

    /**
     * Handle the Run "updated" event.
     */
    public function updated(Run $run): void
    {
        //
    }

    /**
     * Handle the Run "deleted" event.
     */
    public function deleted(Run $run): void
    {
        //
    }

    /**
     * Handle the Run "restored" event.
     */
    public function restored(Run $run): void
    {
        //
    }

    /**
     * Handle the Run "force deleted" event.
     */
    public function forceDeleted(Run $run): void
    {
        //
    }
}

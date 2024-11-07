<?php

namespace App\Observers;

use App\Models\AdvisoryBoard;

class AdvisoryBoardObserver
{
    /**
     * Handle the AdvisoryBoard "created" event.
     */
    public function created(AdvisoryBoard $advisoryBoard): void
    {
        AdvisoryBoard::where('id', '!=', $advisoryBoard->id)
        ->update(['is_default' => false]);
    }

    /**
     * Handle the AdvisoryBoard "updated" event.
     */
    public function updated(AdvisoryBoard $advisoryBoard): void
    {
        //
    }

    /**
     * Handle the AdvisoryBoard "deleted" event.
     */
    public function deleted(AdvisoryBoard $advisoryBoard): void
    {
        //
    }

    /**
     * Handle the AdvisoryBoard "restored" event.
     */
    public function restored(AdvisoryBoard $advisoryBoard): void
    {
        //
    }

    /**
     * Handle the AdvisoryBoard "force deleted" event.
     */
    public function forceDeleted(AdvisoryBoard $advisoryBoard): void
    {
        //
    }
}

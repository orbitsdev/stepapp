<?php

namespace App\Observers;

use App\Models\NewsSection;

class NewsSectionObserver
{
    /**
     * Handle the NewsSection "created" event.
     */
    public function created(NewsSection $newsSection): void
    {
        NewsSection::where('id', '!=', $newsSection->id)
            ->update(['is_default' => false]);

    }

    /**
     * Handle the NewsSection "updated" event.
     */
    public function updated(NewsSection $newsSection): void
    {
        //
    }

    /**
     * Handle the NewsSection "deleted" event.
     */
    public function deleted(NewsSection $newsSection): void
    {
        //
    }

    /**
     * Handle the NewsSection "restored" event.
     */
    public function restored(NewsSection $newsSection): void
    {
        //
    }

    /**
     * Handle the NewsSection "force deleted" event.
     */
    public function forceDeleted(NewsSection $newsSection): void
    {
        //
    }
}

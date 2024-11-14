<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
class Event extends Model implements HasMedia
{

    use HasFactory;
    use InteractsWithMedia;
    public function scopeUpcoming($query)
    {
        return $query->where('is_upcoming', true)
                     ->where('start_date', '>=', now())
                     ->orderBy('start_date', 'asc'); // Events starting soonest come
    }

    /**
     * Scope for recent events
     */
    public function scopeRecent($query)
    {
        return $query->where('start_date', '<', now())
                     ->orderBy('start_date', 'desc'); // Most recent past events come first
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->singleFile();
        // $this->addMediaCollection('images')->onlyKeepLatest(6);
    }

}

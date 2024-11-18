<?php

namespace App\Models;


use App\Models\Social;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model implements HasMedia
{

    use HasFactory;
    use InteractsWithMedia;
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
    

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

    public function getUpdatedAtFormattedAttribute()
    {
        return $this->updated_at->format('F d, Y');
    }
    public function getCreatedAtFormattedAttributeHumanDisplay()
    {
        return $this->created_at->diffForHumans(); // Example: "2 days ago"
    }
    public function getStartDateFormattedAttribute()
    {
        return $this->start_date->format('F d, Y'); // Example: "November 15, 2024"
    }

    public function getEndDateFormattedAttribute()
    {
        return $this->end_date ? $this->end_date->format('F d, Y') : 'N/A';
    }

public function getStartDateRelativeAttribute()
{
    return $this->start_date->diffForHumans();
}

public function getEndDateRelativeAttribute()
{
    return $this->end_date ? $this->end_date->diffForHumans() : 'No end date';
}


}

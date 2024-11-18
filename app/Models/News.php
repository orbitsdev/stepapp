<?php

namespace App\Models;

use App\Models\Social;
use App\Models\Comment;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
    ];

    

public function getImage()
{

    if ($this->hasMedia('image')) {
        return $this->getFirstMediaUrl('image');
    }

    return asset('images/placeholder-image.jpg');
}

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->singleFile();
        // $this->addMediaCollection('images')->onlyKeepLatest(6);
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function getCreatedAtFormattedAttribute()
    {
        return $this->created_at->format('F d, Y'); // Example: "November 15, 2024"
    }

    public function getUpdatedAtFormattedAttribute()
    {
        return $this->updated_at->format('F d, Y');
    }
    public function getCreatedAtFormattedAttributeHumanDisplay()
    {
        return $this->created_at->diffForHumans(); // Example: "2 days ago"
    }



}

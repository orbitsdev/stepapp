<?php

namespace App\Models;

use App\Models\Social;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvisoryMember extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function social()
    {
        return $this->morphOne(Social::class, 'sociable');
    }
    public function socials()
    {
        return $this->morphMany(Social::class, 'sociable');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->singleFile();
    }



public function getImage()
{



    if ($this->hasMedia('image')) {
        return $this->getFirstMediaUrl('image');
    }

    return asset('images/placeholder-image.jpg');
}
}

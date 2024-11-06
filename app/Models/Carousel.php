<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Carousel extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


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


    // public function files(): MorphMany
    // {
    //     return $this->morphMany(File::class, 'fileable');
    // }


    // public function file(): MorphOne
    // {
    //     return $this->morphOne(File::class, 'fileable');
    // }


}

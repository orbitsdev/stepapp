<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class TeamMember extends Model implements HasMedia
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
}

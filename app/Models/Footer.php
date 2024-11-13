<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Footer extends Model  implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public function getImage()
    {
        // Use getFirstMediaUrl directly with a fallback URL.
        return $this->getFirstMediaUrl('image') ?: asset('images/placeholder-image.jpg');
    }




        public function registerMediaCollections(): void
        {
            $this->addMediaCollection('image')->singleFile();
            $this->addMediaCollection('partners')->onlyKeepLatest(2);

        }
}

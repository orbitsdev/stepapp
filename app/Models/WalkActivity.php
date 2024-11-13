<?php

namespace App\Models;

use App\Models\Walk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WalkActivity extends Model
{
    use HasFactory;

    public function walk(){
        return $this->belongsTo(Walk::class);
    }


    public function scopeSorted($query)
    {
        return $query->orderBy('sort_id', 'asc');
    }

}

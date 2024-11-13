<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function scopeSorted($query)
    {
        return $query->orderBy('sort_id', 'asc');
    }
}

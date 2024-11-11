<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;

    public function scopeLatestDefault($query)
    {
        return $query->where('is_default', true)
                     ->latest()
                     ->select(['title', 'description']); // Add fields here
    }
}

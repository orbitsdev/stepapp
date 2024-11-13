<?php

namespace App\Models;

use App\Models\Run;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RunActivity extends Model
{
    use HasFactory;

    public function run(){
        return $this->belongsTo(Run::class);
    }

    public function scopeSorted($query)
    {
        return $query->orderBy('sort_id', 'asc');
    }
}

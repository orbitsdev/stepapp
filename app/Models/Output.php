<?php

namespace App\Models;

use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Output extends Model
{
    use HasFactory;

    public function module(){
        return $this->belongsTo(Module::class);
    }
    public function scopeSorted($query)
    {
        return $query->orderBy('sort_id', 'asc');
    }
}

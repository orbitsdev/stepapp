<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Output;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
    public function outputs()
    {
        return $this->hasMany(Output::class);
    }
}

<?php

namespace App\Models;

use App\Models\WalkActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Walk extends Model
{
    use HasFactory;

    public function walkActivities(){
        return $this->hasMany(WalkActivity::class);
    }
}

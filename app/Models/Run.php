<?php

namespace App\Models;

use App\Models\RunActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Run extends Model
{
    use HasFactory;

    public function runActivities(){
        return $this->hasMany(RunActivity::class);
    }
}

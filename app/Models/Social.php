<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = ['link', 'image'];

    /**
     * Define the polymorphic relationship.
     */
    public function sociable()
    {
        return $this->morphTo();
    }
}

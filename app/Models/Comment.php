<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;


    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user who owns the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

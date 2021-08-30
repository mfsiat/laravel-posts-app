<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'body'
    ];

    // Restrict user from liking same post multiple times
    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    // Relationship between post and user 
    // this is used to get the user identity from the post
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}

// One user will have many post
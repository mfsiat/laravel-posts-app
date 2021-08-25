<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'body'
    ];

    // Relationship between post and user 
    // this is used to get the user identity from the post
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return this->hasMany(Like::class);
    }
}

// One user will have many post
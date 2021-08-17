<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

// One user will have many post
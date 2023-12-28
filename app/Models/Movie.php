<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','author','body','img','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

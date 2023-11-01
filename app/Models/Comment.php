<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'comment',
        'commentable_id',
        'commentable_type'
    ];

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

}

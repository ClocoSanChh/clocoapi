<?php

namespace App\Models;

use App\Enum\GenreEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'title',
        'album_name',
        'genre'
    ];

    protected $casts = [
        'genre' => GenreEnum::class,
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

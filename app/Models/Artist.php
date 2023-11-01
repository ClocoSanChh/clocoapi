<?php

namespace App\Models;

use App\Enum\GenderEnum;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'gender',
        'address',
        'first_release_year',
        'no_of_albums_released'
    ];

    protected $casts = [
        'gender' => GenderEnum::class,
        'dob' => 'date',
        'first_release_year' => 'integer',
        'no_of_albums_released' => 'integer'
    ];

    public function songs()
    {
        return $this->hasMany(Song::class, 'artist_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function delete()
    {
        $res = parent::delete();
        if ($res == true) {
            $relations = $this->comments;
            foreach ($relations as $relation) {
                $relation->delete();
            }
        }
    }

    protected function firstReleaseYear(): Attribute
    {
        return Attribute::make(
            set: function (string|int $value) {
                $value = intval($value);
                $current = intval(now()->year);
                if ($value < 1700) {
                    return 1700;
                } elseif ($value > $current) {
                    return $current;
                } else {
                    return $value;
                }
            },
        );
    }


}

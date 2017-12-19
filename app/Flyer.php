<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $guarded = [];
    /**
     * Find the flyer at the given address
     * @param $query
     * @param $zip
     * @param $street
     * @return mixed
     */
    public static function locatedAt($id)
    {
        return static::where('id', $id)->firstOrFail();
    }

    public function getPriceAttribute($price)
    {
        return '$' . number_format($price);
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ownedBy(User $user)
    {
        return $this->user_id == $user->id;
    }
}

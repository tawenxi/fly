<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Income;
use App\Models\Family;


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

    public function incomes()
    {
        return $this->hasMany(Income::class, 'flyer_id');
    } 

    public function familes()
    {
        return $this->hasMany(Family::class, 'flyer_id');
    } 

    public function ownedBy(User $user)
    {
        return $this->user_id == $user->id;
    }
}

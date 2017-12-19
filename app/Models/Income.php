<?php

namespace App\Models;
use App\Models\Flyer;


class Income extends Model
{
	public $timestamps = false;
    protected $fillable = ['flyer_id', 'zy', 'type', 'amount','date'];

    public function flyer()
    {
    	return $this->belongsTo(Flyer::class);

    }
}

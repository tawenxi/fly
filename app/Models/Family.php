<?php

namespace App\Models;
use App\Models\Flyer;

class Family extends Model
{
    protected $fillable = ['name', 'sex', 'ralationship', 'birthday', 'schoolage', 'work', 'healthy', 'salary', 'workmonth', 'description','flyer_id'];
	public $timestamps = false;



	public function flyer()
    {
    	return $this->belongsTo(Flyer::class,'flyer_id','id');

    }
}
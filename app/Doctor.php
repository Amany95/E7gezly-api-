<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\Rating;
class Doctor extends Model
{
	protected $table = 'doctors';
	protected $primaryKey = 'id';
   /* public function patients()
    {
    	return $this->belongsToMany(Patient::class)->withPivot('stars')->withTimestamps();
    }*/
    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

     
}

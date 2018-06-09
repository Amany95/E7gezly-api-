<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Rating;
class Patient extends Model
{
	protected $table = 'patients';
	protected $primaryKey = 'patient_id';
   /* public function doctors()
    {
    	return $this->belongsToMany(Doctor::class)->withPivot('stars')->withTimestamps();
    }*/
    public function bookings()
    {
        return $this->hasMany('App\booking');
    }
}

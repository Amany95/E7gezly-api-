<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Doctor;
use App\Patient;
class Rating extends Model
{
    protected $table = 'ratings';
    protected $primaryKey = 'rate_id';
    //protected $fillable = ['dr_id', 'p_id', 'stars'];

    /*public function doctors()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }*/
    public function doctors()
    {
        return $this->belongsTo('App\Doctor','id','dr_id');
    }
    
}

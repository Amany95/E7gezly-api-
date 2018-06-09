<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $table = 'bookings';
	protected $primaryKey = 'book_id';

    public function doctors()
    {
        return $this->belongsTo('App\Doctor');
    }

    public function patients()
    {
        return $this->belongsTo('App\patient');
    }
}

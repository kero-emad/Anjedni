<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable=['offer_id','datetime'];
    public function offer()
    {
        return $this->belongsTo(Offer::class,'offer_id');
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}

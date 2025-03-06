<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = ['message','price','service_request_id','provider_id','status','time_id'];

    public function users()
    {
    return $this->belongsTo(User::class,'provider_id');
    }

    public function ServiceRequests()
    {
    return $this->belongsTo(ServiceRequest::class,'service_request_id');
    }
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }


}

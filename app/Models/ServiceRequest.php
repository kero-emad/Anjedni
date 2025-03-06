<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    //
    protected $fillable = ['user_id', 'image','status','description','type','status'];
    public function offers()
{
    return $this->hasMany(Offer::class);
}

public function users()
{
    return $this->belongsTo(User::class);
}

}

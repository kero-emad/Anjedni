<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable=['user_id','service_request_id','offer_id','price','visanumber','CVV'];
}

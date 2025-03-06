<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    protected $fillable = ['provider_id', 'image', 'title', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}

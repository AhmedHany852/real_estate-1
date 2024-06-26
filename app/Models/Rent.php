<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    
    protected $fillable = ['apartment_id', 'amount', 'description'];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}

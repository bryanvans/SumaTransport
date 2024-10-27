<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = ['bus_id', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time'];

    // Definisikan relasi dengan model Bus
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }
}




<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    // Menambahkan relasi belongsTo untuk bus
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    // Jika ingin menambahkan fasilitas (facilities) untuk bus
    public function busFacilities()
    {
        return $this->hasManyThrough(Facility::class, Bus::class);
    }
}







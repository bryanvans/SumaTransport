<?php

// app/Models/Bus.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    public function routes()
    {
        return $this->hasMany(Route::class);
    }

    // Jika ada fasilitas yang terkait dengan bus, Anda bisa mendefinisikan relasi hasMany
    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }
}




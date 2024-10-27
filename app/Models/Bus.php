<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Definisikan relasi dengan model Route (jika diperlukan)
    public function routes()
    {
        return $this->hasMany(Route::class, 'bus_id');
    }
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    // Nama tabel jika tidak sesuai konvensi Laravel
    protected $table = 'buses';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',        // Nama bus
        'operator',    // Operator bus
        'capacity',    // Kapasitas penumpang
    ];

    // Relasi dengan model lain (opsional, sesuai kebutuhan)
    public function schedules()
    {
        return $this->hasMany(Schedule::class); // Relasi ke jadwal bus
    }

    public function routes()
    {
        return $this->belongsTo(Route::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

}

    
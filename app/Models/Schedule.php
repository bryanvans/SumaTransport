<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Nama tabel yang terhubung dengan model ini
    protected $table = 'schedules'; // Sesuaikan dengan nama tabel di database Anda

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'bus_id',
        'departure_time',
        'arrival_time',
        'from',
        'destination',
        'seat_count',
        'date'
    ];    

    /**
     * Relasi ke model Bus
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    /**
     * Relasi ke model Route
     */
    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if it follows conventions)
    protected $table = 'bus_schedules';

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'id_bus',
        'waktu_keberangkatan',
        'waktu_tiba',
        'dari',
        'tujuan',
        'jumlah_kursi',
        'tanggal',
    ];
}

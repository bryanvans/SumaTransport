<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    use HasFactory;

    protected $table = 'bus_schedules'; // Nama tabel di database

    protected $fillable = [
        'id_bus', 
        'waktu_keberangkatan', 
        'waktu_tiba', 
        'dari', 
        'tujuan', 
        'jumlah_kursi', 
        'tanggal'
    ];        
}

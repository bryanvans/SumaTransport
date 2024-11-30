<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalBus extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jadwalbus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_bus',
        'waktu_keberangkatan',
        'waktu_tiba',
        'dari',
        'tujuan',
        'jumlah_kursi',
        'tanggal',
    ];

    /**
     * Define a relationship with the Bus model (optional, if applicable).
     */
    public function bus()
    {
        return $this->belongsTo(Bus::class, 'id_bus');
    }
}

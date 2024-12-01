<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    // Nama tabel jika tidak mengikuti konvensi Laravel (opsional)
    protected $table = 'routes';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'start_point',
        'end_point',
    ];

    // Relasi dengan bus jika diperlukan (opsional)
    public function buses()
    {
        return $this->hasMany(Bus::class);
    }
}

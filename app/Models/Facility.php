<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = ['bus_id', 'facility_name'];

    public function bus() {
        return $this->belongsTo(Bus::class);
    }
}


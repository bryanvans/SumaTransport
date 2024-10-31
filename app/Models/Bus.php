<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    public function routes()
    {
        return $this->hasMany(Route::class, 'bus_id');
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class, 'bus_id');
    }
}



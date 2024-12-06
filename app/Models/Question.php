<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Kolom-kolom yang dapat diisi melalui mass assignment
    protected $fillable = ['question'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}



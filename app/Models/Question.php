<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'user_id']; // Ganti 'user_name' dengan 'user_id'

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


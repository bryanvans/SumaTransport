<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * Get the avatar attribute.
     * 
     * Returns the URL of the avatar or a default image if no avatar is set.
     *
     * @param string|null $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('default-avatar.png');
    }
}

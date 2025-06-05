<?php

namespace App\Models\users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserRegister extends Model
{
    use Notifiable;

    protected $fillable=[
        'name',
        'email',
        'password',

    ];
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];

}

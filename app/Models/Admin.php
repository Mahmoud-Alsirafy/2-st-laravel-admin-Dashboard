<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'permission'
    ];

    public function setPermissionAttribute($per)
    {
        return $this->attributes["permission"] = implode(" ", $per);
    }

    public function getPermissionAttribute($per)
    {
        return explode(" ", $per);
    }




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

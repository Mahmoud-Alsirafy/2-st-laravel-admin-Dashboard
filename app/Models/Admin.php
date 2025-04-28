<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
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

<?php

namespace App\Models;

use App\Models\image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'count',
        'cat',
    ];

    public function image()
    {
        return $this->hasMany(image::class);
    }
}

<?php

namespace App\Models;

use App\Models\image;
use App\Models\users\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'old_price',
        'count',
        'cat',
    ];

    public function image()
    {
        return $this->hasMany(image::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}

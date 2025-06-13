<?php

namespace App\Models\users;

use App\Models\users\Cart;
use App\Models\users\Offer_image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'old_price',
        'count',
        'cat',
    ];

    public function offer_image()
    {
        return $this->hasMany(Offer_image::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}

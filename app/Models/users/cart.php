<?php

namespace App\Models\users;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cart extends Model
{
    use Notifiable;

    protected $fillable = [
        "product_id",
        "offer_id",
        "Quantity",
        "user_id"
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

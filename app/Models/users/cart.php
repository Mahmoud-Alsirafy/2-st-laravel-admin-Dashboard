<?php

namespace App\Models\users;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class cart extends Model
{
    use Notifiable;

    protected $fillable = [
        "product_id",
        "Quantity"

    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

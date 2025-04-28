<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_id",
        "image"
    ];

    public function product()
    {
        return $this->belongsTo(product::class);
    }


    public static function saveImage($id, $image)
    {
        $file = $_FILES["image"]["name"];
        foreach ($file as $key => $value) {
            $tmp = $_FILES["image"]["tmp_name"][$key];
            $ext = pathinfo($_FILES["image"]["name"][$key], PATHINFO_EXTENSION);
            $newName = uniqid() . "." . $ext;
            Image::create([
                "product_id" => $id,
                "image" => $newName
            ]);
            move_uploaded_file($tmp, storage_path("app/public/images/$newName"));
        }
    }


    public static function deleteImage($id)
    {
        $file = Image::where("product_id", $id)->pluck("image");
        foreach ($file as $key => $value) {
            unlink(storage_path("app/public/images/" . $value));
        }
    }
}

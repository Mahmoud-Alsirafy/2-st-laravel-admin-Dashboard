<?php

namespace App\Models\users;

use App\Models\users\Offer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer_image extends Model
{
    use HasFactory;

    protected $fillable = [
        "offer_id",
        "image"
    ];

    public function Offer()
    {
        return $this->belongsTo(Offer::class);
    }


    public static function saveImage($id, $image)
    {
        $file = $_FILES["image"]["name"];
        foreach ($file as $key => $value) {
            $tmp = $_FILES["image"]["tmp_name"][$key];
            $ext = pathinfo($_FILES["image"]["name"][$key], PATHINFO_EXTENSION);
            $newName = uniqid() . "." . $ext;
            Offer_image::create([
                "offer_id" => $id,
                "image" => $newName
            ]);
            move_uploaded_file($tmp, storage_path("app/public/image_offer/$newName"));
        }
    }


    public static function deleteimage($id)
    {
        $file = Offer_image::where("offer_id", $id)->pluck("image");
        foreach ($file as $key => $value) {
            unlink(storage_path("app/public/image_offer/" . $value));
        }
    }
}
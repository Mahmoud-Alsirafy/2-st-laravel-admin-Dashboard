<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::create([
            "name" => "bage",
            "price" => "15",
            "old_price" => "20",
            "count" => "50",
            "cat" => "bage",
        ]);

        $images = [
            "684750663a15b.jpg",
            "684750663abe3.jpg",
            "684750663b6e1.jpg",
            "684750663c542.jpg",
            "684750663ce4c.jpg"
        ];

        foreach ($images as $img) {
            Image::create([
                "product_id" => $product->id,
                "image" => $img,
            ]);
        }

        //
        $product = Product::create([
            "name" => "iphone",
            "price" => "50",
            "old_price" => "",
            "count" => "5",
            "cat" => "phones",
        ]);

        $images = [
            "684750663b6e1.jpg",
            "684750663a15b.jpg",
            "684750663abe3.jpg",
            "684750663c542.jpg",
            "684750663ce4c.jpg"
        ];

        foreach ($images as $img) {
            Image::create([
                "product_id" => $product->id,
                "image" => $img,
            ]);
        }

        //


        $product = Product::create([
            "name" => "labtop",
            "price" => "50",
            "old_price" => "",
            "count" => "5",
            "cat" => "labtop",
        ]);

        $images = [
            "684750663abe3.jpg",
            "684750663a15b.jpg",
            "684750663b6e1.jpg",
            "684750663c542.jpg",
            "684750663ce4c.jpg"
        ];

        foreach ($images as $img) {
            Image::create([
                "product_id" => $product->id,
                "image" => $img,
            ]);
        }

        //


        $product = Product::create([
            "name" => "head phone",
            "price" => "50",
            "old_price" => "",
            "count" => "5",
            "cat" => "head phone",
        ]);

        $images = [
            "684750663c542.jpg",
            "684750663b6e1.jpg",
            "684750663abe3.jpg",
            "684750663a15b.jpg",
            "684750663ce4c.jpg"
        ];

        foreach ($images as $img) {
            Image::create([
                "product_id" => $product->id,
                "image" => $img,
            ]);
        }


        //


        $product = Product::create([
            "name" => "spaker",
            "price" => "50",
            "old_price" => "",
            "count" => "5",
            "cat" => "spaker",
        ]);

        $images = [
            "684750663ce4c.jpg",
            "684750663b6e1.jpg",
            "684750663a15b.jpg",
            "684750663abe3.jpg",
            "684750663c542.jpg",
        ];

        foreach ($images as $img) {
            Image::create([
                "product_id" => $product->id,
                "image" => $img,
            ]);
        }

        //


    }
}

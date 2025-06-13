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
            "684c8f593a247.jpg",
            "684c8f593acf9.jpg",
            "684c8f593b73b.jpg",
            "684c8f593997e.jpg",
            "684c8f5939189.jpg"
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
            "684c8f593b73b.jpg",
            "684c8f593a247.jpg",
            "684c8f593acf9.jpg",
            "684c8f593997e.jpg",
            "684c8f5939189.jpg"
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
            "684c8f593acf9.jpg",
            "684c8f593a247.jpg",
            "684c8f593b73b.jpg",
            "684c8f593997e.jpg",
            "684c8f5939189.jpg"
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
            "684c8f593997e.jpg",
            "684c8f593b73b.jpg",
            "684c8f593acf9.jpg",
            "684c8f593a247.jpg",
            "684c8f5939189.jpg"
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
            "684c8f5939189.jpg",
            "684c8f593b73b.jpg",
            "684c8f593a247.jpg",
            "684c8f593acf9.jpg",
            "684c8f593997e.jpg",
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

<?php

namespace Database\Seeders;

use App\Models\users\Offer;
use Illuminate\Database\Seeder;
use App\Models\users\Offer_image;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offer = Offer::create([
            "name" => "drone",
            "price" => "15",
            "old_price" => "20",
            "count" => "50",
            "cat" => "bage",
        ]);

        $images = [
            "685193ce2e880.jpg",
            "685193ce2ff2b.jpg",
            "685193ce318eb.jpg",
            "685193ce3343e.jpg",
            "685193ce2c59e.jpg"
        ];

        foreach ($images as $img) {
            Offer_image::create([
                "offer_id" => $offer->id,
                "image" => $img,
            ]);
        }

        //
        $offer = Offer::create([
            "name" => "camera",
            "price" => "15",
            "old_price" => "20",
            "count" => "50",
            "cat" => "bage",
        ]);

        $images = [
            "685193ce2ff2b.jpg",
            "685193ce2e880.jpg",
            "685193ce318eb.jpg",
            "685193ce3343e.jpg",
            "685193ce2c59e.jpg"
        ];

        foreach ($images as $img) {
            Offer_image::create([
                "offer_id" => $offer->id,
                "image" => $img,
            ]);
        }

        //
        $offer = Offer::create([
            "name" => "fly",
            "price" => "15",
            "old_price" => "20",
            "count" => "50",
            "cat" => "bage",
        ]);

        $images = [
            "685193ce318eb.jpg",
            "685193ce2e880.jpg",
            "685193ce2ff2b.jpg",
            "685193ce3343e.jpg",
            "685193ce2c59e.jpg"
        ];

        foreach ($images as $img) {
            Offer_image::create([
                "offer_id" => $offer->id,
                "image" => $img,
            ]);
        }

        //
        $offer = Offer::create([
            "name" => "wireless",
            "price" => "15",
            "old_price" => "20",
            "count" => "50",
            "cat" => "bage",
        ]);

        $images = [
            "685193ce3343e.jpg",
            "685193ce2e880.jpg",
            "685193ce2ff2b.jpg",
            "685193ce318eb.jpg",
            "685193ce2c59e.jpg"
        ];

        foreach ($images as $img) {
            Offer_image::create([
                "offer_id" => $offer->id,
                "image" => $img,
            ]);
        }

        //
        $offer = Offer::create([
            "name" => "away",
            "price" => "15",
            "old_price" => "20",
            "count" => "50",
            "cat" => "bage",
        ]);

        $images = [
            "685193ce2c59e.jpg",
            "685193ce2e880.jpg",
            "685193ce2ff2b.jpg",
            "685193ce318eb.jpg",
            "685193ce3343e.jpg",
        ];

        foreach ($images as $img) {
            Offer_image::create([
                "offer_id" => $offer->id,
                "image" => $img,
            ]);
        }

        //
    }
}

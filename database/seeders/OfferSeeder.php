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
            "684c9669a85bb.jpg",
            "684c9669a99b4.jpg",
            "684c9669a901d.jpg",
            "684c9669aa80b.jpg",
            "684c9669aaf6f.jpg"
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
            "684c9669a99b4.jpg",
            "684c9669a85bb.jpg",
            "684c9669a901d.jpg",
            "684c9669aa80b.jpg",
            "684c9669aaf6f.jpg"
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
            "684c9669a901d.jpg",
            "684c9669a85bb.jpg",
            "684c9669a99b4.jpg",
            "684c9669aa80b.jpg",
            "684c9669aaf6f.jpg"
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
            "684c9669aa80b.jpg",
            "684c9669a85bb.jpg",
            "684c9669a99b4.jpg",
            "684c9669a901d.jpg",
            "684c9669aaf6f.jpg"
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
            "684c9669aaf6f.jpg",
            "684c9669a85bb.jpg",
            "684c9669a99b4.jpg",
            "684c9669a901d.jpg",
            "684c9669aa80b.jpg",
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

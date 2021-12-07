<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $movies = [
            [
                'Coming 2 America',
                'https://theroxy.org/appimages/us/tmdb1s/GENLAG/2087_genlag.jpg',
                'The African monarch Akeem learns he has a long-lost son
                in the United States and must return to America to meet
                this unexpected heir and build a relationship with his son.',

            ],

            [
                'Eagle Wings',
                'https://theroxy.org/appimages/us/tmdb1s/GENLAG/2094_genlag.jpg',
                'Starring Nollywood stars Eyinna Nwigwe and Femi Jacobs as leads,
                the film is a poignant action war drama about an Airforce Fighter
                 Pilot who is caught in the harrowing world.',
            ],

            [
                'GODZILLA VS KONG VIP',
                'https://theroxy.org/appimages/us/godzilla%20vs%20kong.jpg',
                'The epic next chapter in the cinematic Monsterverse pits two of the greatest
                icons in motion picture history against one another
                – the fearsome Godzilla and the mighty Kong – with humanity caught in the balance.',
            ],

            [
                'Razz Guy',
                'https://theroxy.org/appimages/us/tmdb1s/GENLAG/574_genaja.jpg',
                'When an international business manager merger is assigned to a rude
                 and condescending senior executive, a curse that affects his ability
                  to speak properly is cast on him by an',
            ],

            [
                'La Femme Anjola',
                'https://theroxy.org/appimages/us/tmdb1s/GENLAG/573_genaja.jpg',
                '“La Femme Anjola” tells the story of a young man Dejare (Bassey) who becomes entangled in a
                 deadly game of cat and mouse when he meets and falls for a mysterious woman Anjola',
            ],

        ];

        foreach ($movies as $movie) {
            DB::table('movies')->insert([
                'title' => $movie[0],
                'image' => $movie[1],
                'description' => $movie[2]
            ]);
        }
    }
}

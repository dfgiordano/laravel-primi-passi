<?php

use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        "links" => [
            "home" => "home",
            "contacts" => "contatti",
            "collection" => "collezioni",
            "login" => "login",
            "register" => "registrati"
        ],
        "mangas" => [
            "slamdunk" => [
                "cover" => "https://www.animeclick.it/immagini/manga/Slam_Dunk/cover/Slam_Dunk-cover.jpg",
                "title" => "Slamdunk",
                "year" => "1993"
            ],
            "dragonball" => [
                "cover" => "https://images-na.ssl-images-amazon.com/images/I/81yC-HFDoJL.jpg",
                "title" => "Dragonball",
                "year" => "1984"
            ],
            "cityhunter" => [
                "cover" => "https://images-na.ssl-images-amazon.com/images/I/71DVBvAx7NL.jpg",
                "title" => "City Hunter",
                "year" => "1985"
            ],
        ],
        "footer" => [
            "prices" => "Vai al catalogo prezzi",
            "collections" => "Nuove collezioni",
            "newsletter" => "Iscriviti alla newsletter"
        ]
    ];
    return view('home',$data) ;
});

Route::get('/contatti', function () {
    $data = [
        "contatti_links" => [
            "indirizzo" => "Indirizzo : " . "Via Nazionale n21, Roma 22222",
            "email" => "Email : " . "fabbricadimanga@manga.com",
            "link coordinate google" => "Coordinate : " . "41°24'12.2'N 2°10'26.5'E",
            "numero" => "Numero : " . "02345678910",
        ]
        ];
    return view('contatti',$data) ;
});
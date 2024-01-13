<?php

namespace App\Service;

class ServeiDadesEquips
{
    private $equipos = [
        [
            "codi" => 1,
            "nom" => "Equip Roig",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Elena", "Vicent", "Joan", "Maria"],
            "img" => "imatge_1.jpeg" 
        ],
        [
            "codi" => 2,
            "nom" => "Equip Blau",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Pau", "Laura", "Carlos", "Lola"],
            "img" => "imatge_2.jpeg" 
        ],
        [
            "codi" => 3,
            "nom" => "Equip Verd",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Alejandro", "Ana", "Sergio", "Carmen"],
            "img" => "imatge_3.jpeg" 
        ],
        [
            "codi" => 4,
            "nom" => "Equip Groc",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Lucía", "Pedro", "Isabel", "Miguel"],
            "img" => "imatge_4.jpeg" 
        ],
    ];

    public function get()
    {
        return $this->equipos;
    }
}
?>

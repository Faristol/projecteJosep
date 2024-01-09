<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $equipos = [
        [
            "codi" =>1,
            "nom" => "Equip Roig",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Elena", "Vicent", "Joan", "Maria"]
        ],
        [
            "codi" => 2,
            "nom" => "Equip Blau",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Pau", "Laura", "Carlos", "Lola"]
        ],
        [
            "codi" => 3,
            "nom" => "Equip Verd",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Alejandro", "Ana", "Sergio", "Carmen"]
        ],
        [
            "codi" => 4,
            "nom" => "Equip Groc",
            "cicle" => "DAW",
            "curs" => "23/24",
            "membres" => ["Lucía", "Pedro", "Isabel", "Miguel"]
        ],
    ];
    #[Route('/equips/{codi}', name: 'dades_equip',requirements: ['codi' => '\d+'])]
    public function equips($codi=1): Response
    {
        $equipBuscar = array_filter($this->equipos, function ($equip) use ($codi) {
            return $equip['codi'] == $codi;
        });
        if ($equipBuscar) {
            $equip = array_shift($equipBuscar);
            return $this->render('equips/index.html.twig', [
                'equip' => $equip,
            ]);
        }else{
            return $this->render('equips/index.html.twig', [
                'equip' => NULL
            ]);

        }

        
    }
}

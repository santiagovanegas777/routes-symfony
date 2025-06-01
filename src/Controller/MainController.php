<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController{

    #[Route("/grupo/{name}/{type}/ciudad/{city}", methods: ['GET'])]
    public function grupoMusical($name, $type, $city)
    {

        return new Response("somos $name y tocamos $type y somos de $city");
    }

    #[Route("/grupo/{name}/{type}/ciudad/{city}", methods: ['POST'])]
    public function grupoMusicalPost($name, $type, $city)
    {

        return new Response("somos $name y tocamos $type y somos de $city");
    }
}
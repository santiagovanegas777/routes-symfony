<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function saludo()
    {
        return new Response ("Buenas tardes");
    }

    #[Route("/user/{name}/{surname}/edad/{age}", methods: ["GET"], requirements: ["age"=>"\d+"])]
    public function usuario($name, $surname, $age)
    {
        $user =[
            "name" => $name,
            "surname" => $surname,
            "age" => $age
        ];

        
        // return new Response("<h1>Soy $name $surname y tengo $age años</h1>");
        
        //ahora devolveremos un json
        // return new JsonResponse($user);

        //ahora utilizaremos twing para mostrarlo en el html

        return $this->render("base.html.twig", [
            "nombre" => $name,
            "apellido" => $surname,
            "edad" => $age
        ]);
    }

    #[Route("/user/{name}/{surname}/edad/{age}", methods: ["POST", "PUT"])]
    public function usuarioPost($name, $surname, $age)
    {
        return new Response("soy $name $surname y tengo $age años");
    }

}
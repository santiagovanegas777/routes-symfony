<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
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

        
        // return new Response("Soy $name $surname y tengo $age años");
        
        //ahora devolveremos un json
        return new JsonResponse($user);
    }

    #[Route("/user/{name}/{surname}/edad/{age}", methods: ["POST", "PUT"])]
    public function usuarioPost($name, $surname, $age)
    {
        return new Response("soy $name $surname y tengo $age años");
    }

}
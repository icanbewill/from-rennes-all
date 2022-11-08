<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="app_hello")
     */
    // public function hello($prenom = "World", Environment $twig)
    // {
    //     return new Response("Hello $prenom");
    // }
}

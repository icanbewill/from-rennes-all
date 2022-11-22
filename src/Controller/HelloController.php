<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function hello($prenom = "World", $departement = "Bretagne", Environment $twig)
    {
        //$html=$twig->render('hello/index.html.twig');
        //$html=$twig->render('hello/index.html.twig', ['prenom' => 'Sophie'] );
        $html = $twig->render('hello.html.twig', [
            'prenom' => "$prenom",
            'departement' => $departement,
            // 'pays' => ['FR', 'US']
            'pays' => [
                ['code' => 'FR', 'nom' => 'France'],
                ['code' => 'US', 'nom' => 'USA'],
                ['code' => 'SE', 'nom' => 'SomeWhere Else']
            ],
            'bien1' => ['id' => 234, 'ville' => 'Rennes', 'prix' => 500000],
            'bien2' => ['id' => 731, 'ville' => 'Cesson', 'prix' => 300000]
        ]);
        return new Response($html);
        // return new Response ("Hello $prenom");

        return new Response($html);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function index()
    {
        dd('hahaha');
    }

    /**
     * @Route("/test/{id?000}", name="test")
     */
    public function test($id)
    {
        dd("Je suis ici et la variable passée est $id");
    }

    /**
     * @Route("/mytest/", name="mytest")
     */
    public function mytest()
    {
        $request = Request::createFromGlobals();
        $dep = $request->query->get('dep', 0);
        dd("Mais je suis $dep");
    }
}

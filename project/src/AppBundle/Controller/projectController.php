<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class projectController extends Controller
{

    /**
     * @Route("/helloWorld", name="hello world")
     */
    public function tes(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('project/helloWorld.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function teste(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/registro", name="registro")
     */
    public function teste1(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/registro.html.twig');
    }
}

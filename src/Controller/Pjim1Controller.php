<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Pjim1Controller extends AbstractController
{
    /**
     * @Route("/pjim1", name="pjim1")
     */
    public function index()
    {
        return $this->render('pjim1/index.html.twig', [
            'controller_name' => 'Pjim1Controller',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    { 
        return $this->render('pjim1/home.html.twig');
    }

     /**
     * @Route("/pjim1/form", name="form")
     */
    public function form()
    { 
        return $this->render('pjim1/form.html.twig');
    }
    
}

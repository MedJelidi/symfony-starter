<?php

namespace TekUpEtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@TekUpEtudiant/Etudiant/index.html.twig');
    }
}

<?php


namespace TekUpEtudiantBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    public function indexAction()
    {
        return new Response('Bonjour mes étudiants');
    }

    public function affichageAction($id)
    {
        return new Response('Bonjour etudiant: ' . $id . '.');
    }

    public function voirAction($name)
    {
        return $this->render('@TekUpEtudiant/Etudiant/etudiant.html.twig', array('name' => $name));
    }

    public function listAction()
    {
        $etudiants = array('ali', 'Mohamed', 'Zied', 'Hamza');
        $modules = array(
            array(
                'nom' => 'Technologies Web',
                'id' => 1,
                'enseignant' => 'Ali',
                'nombreHeures' => 45,
                'date' => '17/09/2018'
            ),
            array(
                'nom' => 'Français',
                'id' => 2,
                'enseignant' => 'Mohamed',
                'nombreHeures' => 21,
                'date' => '17/09/2018'
            ),
            array(
                'nom' => 'Programmation',
                'id' => 3,
                'enseignant' => 'Zied',
                'nombreHeures' => 45,
                'date' => '17/09/2018'
            )
        );
        return $this->render('@TekUpEtudiant/Etudiant/list.html.twig',
            array('etudiants' => $etudiants, 'modules' => $modules));
    }

    public function affecterAction() {
        return $this->render('@TekUpEtudiant/Etudiant/affecter.html.twig', array());
    }

}

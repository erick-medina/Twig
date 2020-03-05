<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\SpacesToDashes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        if (!isset($_POST['sentence'])) {
            $_POST['sentence'] = "";
        }
        if(!isset($_POST['sentence2'])) {
            $_POST['sentence2'] = "";
        }
        $capitalization = new Capitalize();
        $dashes = new SpacesToDashes();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'sentence' => $capitalization->transform($_POST['sentence']),
            'sentence2' => $dashes->transform($_POST['sentence2']),
        ]);
    }
}

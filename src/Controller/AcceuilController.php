<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/acceuil", name="app_acceuil")
     */
    public function index(): Response
    {
        $nomsStudents=["Jérémieé", "Ousmane", "Alexia", "Chouaibou"] ; 
        $age = 25;
        return $this->render('acceuil/index.html.twig', [
            'lesNoms' => $nomsStudents,
            'studentAge'=>$age,
            // 'controller_name' => 'AcceuilController',
        ]);
    }
}

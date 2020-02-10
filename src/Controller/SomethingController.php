<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SomethingController extends AbstractController
{
    /**
     * @Route("/something", name="something")
     */
    public function index()
    {
        return $this->render('something/index.html.twig', [
            'controller_name' => 'SomethingController',
            'cool_url' => $this->generateUrl('app_lucky_number')
        ]);
    }
}

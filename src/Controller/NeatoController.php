<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NeatoController extends AbstractController
{
    /**
     * @Route("/neato", name="neato")
     */
    public function index()
    {
        $product = false;

        if (!$product) {
          throw $this->createNotFoundException("Not found baby");
        }
        return $this->redirectToRoute('app_lucky_number');
    }
}

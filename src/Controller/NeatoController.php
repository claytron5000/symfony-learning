<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class NeatoController extends AbstractController
{
    /**
     * @Route("/neato", name="neato")
     */
    public function index(SessionInterface $session, Request $request, LoggerInterface $logger)
    {
        $session->set('fooo', 'bar');
        $filters = $session->get('fooo', array());
        print_r($filters);
        $product = true;

      $lang = $request->getPreferredLanguage();

      $logger->info('Here is the page: ' .$request->query->get('page'));
      $this->addFlash(
        'notice',
        'Your changes were saved! from neato, you speak ' . $lang
      );

        if (!$product) {
          throw $this->createNotFoundException("Not found baby");
        }
        return $this->redirectToRoute('app_lucky_number');
    }
}

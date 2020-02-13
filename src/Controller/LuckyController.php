<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Stopwatch\Stopwatch;

class LuckyController extends AbstractController
{
  /**
   * @Route("/lucky/number/{max}")
   *
   * @param $max
   * @param $logger
   *
   * @throws
   * @return Response
   */
  public function number(int $max = 100, LoggerInterface $logger, Stopwatch $stopwatch) : Response
  {
    $stopwatch->start('lucky_number');

    $number = random_int(0, $max);

    $logger->info("Loggin it!");
    usleep(500);

    $stopwatch->stop('lucky_number');
    $message = $stopwatch->getEvent('lucky_number');
    $logger->info($message);
    return $this->render('neato/index.html.twig', ['lucky_number' => $number, 'controller_name' => 'Lucky']);
  }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;

class FileController extends AbstractController
{
    /**
     * @Route("/file", name="file")
     */
    public function index()
    {
        $file = new File('resources/cool.txt');
        return $this->file($file);
    }
}

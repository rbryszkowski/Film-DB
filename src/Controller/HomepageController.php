<?php
// src/Controller/HomepageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    public function homepage(): Response {

      $homepage = file_get_contents('html/index.html');
      return new Response($homepage);

      // $word = 'llama';
      // return $this->render('homepage/index.html.twig', ['word'=> $word]);
    }
}

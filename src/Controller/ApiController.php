<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


class ApiController extends AbstractController
{
  #[Route('/api/hello', name: 'api_hello')]
  public function hello(): JsonResponse
  {
    return $this->json(['message' => 'Hallo aus Symfony!']);
  }

  #[Route ('/Controller/AuthController', name: 'AuthController')]
  public function Anmelden(): JsonResponse  
  {
   return $this->json(['Controller/AuthController.php']);
  
  }

}
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AuthController
{
  #[Route('/api/login', name: 'api_login', methods: ['POST'])]
  public function login(Request $request): JsonResponse
  {  
    // JSON auslesen
    $data = json_decode($request->getContent(), true);

    $email = $data['email'] ?? null;
    $password = $data['password'] ?? null;

    // Beispielhafte Prüfung (hier würdest du DB + Passwortprüfung machen)
    if ($email === 'myprogram@justmail.de' && $password === 'test123') {
      return new JsonResponse([
        'token' => 'FAKE_JWT_TOKEN_123'
      ]);
    }

    return new JsonResponse([
      'error' => 'Ungültige Zugangsdaten'
    ],401);
  }
}
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class AuthController
{
  #[Route('/Controller/ApiController', name: 'api_login', methods: ['POST'])]
  public function login(Request $request): JsonResponse
  {
    // JSON auslesen
    $data = json_decode($request->getContent(), true);

    $email = $data['email'] ?? null;
    $password = $data['password'] ?? null;

    // Beispielhafte Prüfung (hier würdest du DB + Passwortprüfung machen)
    if ($email === 'test@example.com' && $password === 'secret') {
      return new JsonResponse([
        'token' => 'FAKE_JWT_TOKEN_123'
      ]);
    }

    return new JsonResponse([
      'error' => 'Ungültige Zugangsdaten'
    ],401);
  }
}
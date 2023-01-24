<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return new Response(
            '<html><body><h1>Hello Symfony6!</h1></body></html>'
        );
    }
}
<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class PanelController extends AbstractController
{

    #[Route('/admin')]
    public function index(): Response
    {

    }

}

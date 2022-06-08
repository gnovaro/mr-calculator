<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController extends AbstractController
{
    public function show(): Response
    {
        return $this->render('calculator.html.twig');
    }
}
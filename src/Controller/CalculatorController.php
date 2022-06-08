<?php

namespace App\Controller;

use App\Service\DivisionService;
use App\Service\MinusService;
use App\Service\MultiplicationService;
use App\Service\OperatorServiceInterface;
use App\Service\PlusService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends AbstractController
{
    public function show(Request $request): Response
    {
        $result = 0.0;
        $num1 = $request->get('num1');
        $num2 = $request->get('num2');
        $operator = $request->get('operator');

        if($operator)
        {
            switch ($operator)
            {
                case '+':
                    $operatorService = new PlusService();
                    break;
                case '-':
                    $operatorService = new MinusService();
                    break;
                case '*':
                    $operatorService = new MultiplicationService();
                    break;
                case '/':
                    $operatorService = new DivisionService();
                    break;
            }

            try {
                $result = $operatorService->run($num1, $num2);
            } catch (\Throwable $t) {

            }
        }

        return $this->render('calculator.html.twig', ['result' => $result]);
    }
}
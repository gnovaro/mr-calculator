<?php

namespace App\Service;

class DivisionService implements OperatorServiceInterface
{
    public function run(float $number1, float $number2) : float
    {
        $result = 0.0;
        try {
            $result = $number1 / $number2;
        }  catch (DivisionByZeroError $e) {
            echo "Caught DivisionByZeroError!\n";
        }
        return $result;
    }
}
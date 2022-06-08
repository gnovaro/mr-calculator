<?php

namespace App\Service;

class MultiplicationService implements OperatorServiceInterface
{
    public function run(float $number1, float $number2) : float
    {
        return $number1 * $number2;
    }
}
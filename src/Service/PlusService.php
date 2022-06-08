<?php

namespace App\Service;

class PlusService implements OperatorServiceInterface
{
    public function run(float $number1, float $number2) : float
    {
        return $number1 + $number2;
    }
}
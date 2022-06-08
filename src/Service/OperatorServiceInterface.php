<?php

namespace App\Service;

interface OperatorServiceInterface
{
    public function run(float $number1, float $number2) : float;
}
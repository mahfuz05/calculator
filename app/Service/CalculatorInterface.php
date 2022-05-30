<?php

namespace App\Service;


interface CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float;
}
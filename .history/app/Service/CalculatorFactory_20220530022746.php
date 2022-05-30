<?php

namespace App\Service;


interface CalculatorFactory
{
    public function calculate(float $firstNumber, float $secondNumber): float;
}
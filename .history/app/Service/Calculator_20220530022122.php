<?php
namespace App\Service;

class Calculator implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
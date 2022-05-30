<?php
namespace App\Service;

class Division implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
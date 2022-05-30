<?php
namespace App\Service;

class Addition implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
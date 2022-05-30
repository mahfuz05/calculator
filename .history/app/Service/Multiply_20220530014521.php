<?php
namespace App\Service;

class Multiply implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber * $secondNumber;
    }
}
<?php
namespace App\Service;

class Subtruction implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return max($firstNumber , $secondNumber) - min ($firstNumber , $secondNumber);
    }
}
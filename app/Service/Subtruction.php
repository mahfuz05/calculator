<?php
namespace App\Service;

class Subtruction implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return  $firstNumber - $secondNumber;
    }
}
<?php
namespace App\Service;

class Calculator 
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
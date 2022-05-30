<?php
namespace App\Service;

class Calculator 
{
    private $action;
    
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }
}
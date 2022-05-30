<?php

namespace App\Service;


class CalculatorFactory
{
    
    public static function getAction(string $id): CalculatorInterface
    {
        switch ($id) {
            case "addition":
                return new Addition();
            case "subtraction":
                return new Subtruction();
            case "cc":
                    return new Addition();
            case "paypal":
                    return new Subtruction();    
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}
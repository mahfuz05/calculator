<?php

namespace App\Service;


class CalculatorFactory
{
    
    public static function getAction(string $id): CalculatorInterface
    {
        switch ($id) {
            case "add":
                return new Addition();
            case "sub":
                return new Subtruction();
            case "multi":
                    return new Addition();
            case "paypal":
                    return new Subtruction();    
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}
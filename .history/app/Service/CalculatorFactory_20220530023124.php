<?php

namespace App\Service;


class CalculatorFactory
{
    
    public static function getAction(string $actionName): CalculatorInterface
    {
        switch ($actionName) {
            case "add":
                return new Addition();
            case "sub":
                return new Subtruction();
            case "multi":
                    return new Multiply();
            case "div":
                    return new Division();    
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}
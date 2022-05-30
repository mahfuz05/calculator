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
                    return new Multiply();
            case "div":
                    return new Division();    
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}
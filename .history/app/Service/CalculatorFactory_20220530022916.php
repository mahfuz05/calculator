<?php

namespace App\Service;


class CalculatorFactory
{
    
    public static function getAction(string $id): CalculatorInterface
    {
        switch ($id) {
            case "cc":
                return new CreditCardPayment();
            case "paypal":
                return new PayPalPayment();
            default:
                throw new \Exception("Unknown Payment Method");
        }
    }
}
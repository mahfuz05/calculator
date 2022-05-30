<?php
namespace App\Service;

class Calculator 
{
    private $action;

    public function __construct(CalculatorInterface $action)
    {
        $this->action = $action;
    }
}
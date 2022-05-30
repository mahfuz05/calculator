<?php
namespace App\Service;

class Calculator 
{
    private $action;

    public function __construct()
    {
    
    }

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     */
    public function setAction(CalculatorInterface $action)
    {
        $this->action = $action;
    }

    public function execute(float $firstNumber, float $secondNumber): float
    {
        return  $this->action->calculate($firstNumber, $secondNumber);

    }
}
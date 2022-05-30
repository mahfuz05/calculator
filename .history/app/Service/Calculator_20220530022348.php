<?php
namespace App\Service;

class Calculator 
{
    private $action;

    public function __construct(CalculatorInterface $action)
    {
        $this->action = $action;
    }

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     */
    public function setAction(CalculatorInterface $action)
    {
        $this->action = $action;
    }

    public function doSomeBusinessLogic(): void
    {

    }
}
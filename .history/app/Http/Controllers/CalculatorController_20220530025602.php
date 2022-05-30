<?php
namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use App\Service\CalculatorFactory;
use DivisionByZeroError;

class CalculatorController extends Controller 
{
    public function index(CalculatorRequest $request, CalculatorFactory $factory)
    {
        try {
            $firstNumber = $request->firstNumber;
            $type = $request->type;
            $secondNumber = $request->secondNumber;
            
          
        } catch(DivisionByZeroError $e) {

        }

        return response();
    }
}
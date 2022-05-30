<?php
namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use DivisionByZeroError;

class CalculatorController extends Controller 
{
    public function index(CalculatorRequest $request)
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
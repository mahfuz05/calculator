<?php
namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use DivisionByZeroError;

class CalculatorController extends Controller 
{
    public function index(CalculatorRequest $request)
    {
        try {
            list($firstNumber, $type, $secondNumber) = $request->toArray();
        } catch(DivisionByZeroError $e) {

        }

        return response();
    }
}
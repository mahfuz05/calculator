<?php
namespace App\Http\Controllers;

use App\Http\Request\CalculatorRequest;
use DivisionByZeroError;

class CalculatorController extends Controller 
{
    public function index(CalculatorRequest $request)
    {
        try {

        } catch(DivisionByZeroError $e) {

        }
    }
}
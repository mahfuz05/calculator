<?php
namespace App\Http\Controllers;

use App\Http\Request\CalculatorRequest;
use DivisionByZeroError;
use Illuminate\Http\Request;

class CalculatorController extends Controller 
{
    public function index(Request $request)
    {
        // try {
        
        // } catch(DivisionByZeroError $e) {

        // }

        return response($request->toArray());
    }
}
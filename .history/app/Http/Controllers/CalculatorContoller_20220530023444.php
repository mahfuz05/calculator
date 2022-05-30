<?php
namespace App\Http\Controllers;

use DivisionByZeroError;

class CalculatorController extends Controller 
{
    public function index()
    {
        try {

        } catch(DivisionByZeroError $e) {

        }
    }
}
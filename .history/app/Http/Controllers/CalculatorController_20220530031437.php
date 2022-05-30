<?php
namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use App\Service\Calculator;
use App\Service\CalculatorFactory;
use DivisionByZeroError;

class CalculatorController extends Controller 
{
    private $factory;
    private $service;
    public function __construct(CalculatorFactory $factory, Calculator $service)
    {
        $this->factory = $factory;
        $this->service = $service;
    } 

    public function index(CalculatorRequest $request, CalculatorFactory $factory)
    {
        try {
            $firstNumber = $request->firstNumber;
            $type = $request->type;
            $secondNumber = $request->secondNumber;

            $action = $this->factory::getAction($type);
            //var_dump($action );
            $this->service->setAction($action);
            $response = $this->service->execute($firstNumber, $secondNumber);
           //var_dump($response);
            return response(['result' => $response]);
          
        } catch(DivisionByZeroError $e) {
            return response(['result' => $e->getMessage()], 422);
        }

       
    }
}
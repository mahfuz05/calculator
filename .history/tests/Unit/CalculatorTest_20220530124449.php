<?php

namespace Tests\Unit;

use App\Service\Calculator;
use App\Service\CalculatorFactory;
use DivisionByZeroError;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
   /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_addition_is_true()
    {
         $factory = new CalculatorFactory();
         $service = new  Calculator();

         $service->setAction($factory->getAction('add'));
        
         $this->assertEquals(10, $service->execute(5, 5));

    }
    public function test_subtraction_is_true()
    {
         $factory = new CalculatorFactory();
         $service = new  Calculator();

         $service->setAction($factory->getAction('sub'));
        
         $this->assertEquals(3, $service->execute(10, 7), 'Subtraction of 10 - 7 =');

    }
    public function test_multipication()
    {
         $factory = new CalculatorFactory();
         $service = new  Calculator();

         $service->setAction($factory->getAction('multi'));
        
         $this->assertEquals(70, $service->execute(10, 7), 'Multiplication of 10 * 7 =');

    }

    public function test_division_true()
    {
         $factory = new CalculatorFactory();
         $service = new  Calculator();

         $service->setAction($factory->getAction('div'));
        
         $this->assertEquals(10, $service->execute(70, 7), 'Multiplication of 70 / 7 =');

    }

    public function test_division_divied_by_zero_exception()
    {
         $factory = new CalculatorFactory();
         $service = new  Calculator();

         $service->setAction($factory->getAction('div'));
        
         $this->expectException(DivisionByZeroError::class);

         $service->execute(70, 0);

    }



    public function calculatorProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }
}



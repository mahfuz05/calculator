<?php

namespace Tests\Unit;

use App\Service\Calculator;
use App\Service\CalculatorFactory;
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

         $service->setAction($factory->getAction('sub'));
        
         $this->assertEquals(3, $service->execute(10, 7), 'Subtraction of 10 - 7 =');

    }
}

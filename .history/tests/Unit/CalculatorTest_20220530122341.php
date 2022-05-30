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
    public function test_addition_is_not_equal()
    {
         $factory = new CalculatorFactory();
         $service = new  Calculator();

         $service->setAction($factory->getAction('add'));
        
         $this->assertEquals(11, $service->execute(5, 5));

    }
}

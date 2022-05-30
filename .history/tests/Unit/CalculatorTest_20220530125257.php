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

    protected $factory, $service ;

    protected function setUp(): void
    {
        $this->factory = new CalculatorFactory();
        $this->service = new  Calculator();
    }

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
        

        $this->service->setAction($this->factory->getAction('add'));
        
        $this->assertEquals(10, $this->service->execute(5, 5));

    }
    public function test_subtraction_is_true()
    {
        

         $this->service ->setAction($this->factory->getAction('sub'));
        
         $this->assertEquals(3, $this->service->execute(10, 7), 'Subtraction of 10 - 7 =');

    }
    public function test_multipication()
    {
       
        $this->service->setAction($this->factory->getAction('multi'));
        
        $this->assertEquals(70, $this->service->execute(10, 7), 'Multiplication of 10 * 7 =');

    }

    public function test_division_true()
    {
         
        $this->service->setAction($this->factory->getAction('div'));
        
        $this->assertEquals(10, $this->service->execute(70, 7), 'Multiplication of 70 / 7 =');

    }

    public function test_division_divied_by_zero_exception()
    {
         

         $this->service->setAction($this->factory->getAction('div'));
        
         $this->expectException(DivisionByZeroError::class);

         $this->service->execute(70, 0);

    }


    /**
     * @dataProvider calculatorProvider
     */
    public function testCalculatorUsingDataProvider($action, $firstNumber, $secondNumber, $expected)
    {
            $this->service->setAction($this->factory->getAction($action));
            $this->assertEquals($expected, $this->service->execute($firstNumber, $secondNumber));
    }

    public function calculatorProvider()
    {
        return [
            ['add', 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];
    }
}



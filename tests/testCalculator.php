<?php

use Class\Calculator;
use PHPUnit\Framework\TestCase;

class testCalculator extends TestCase {

    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    /**
     * @dataProvider numbersProvider
     * @return void
     * */
    public function testAdd($firstNumber, $secondNumber, $expected)
    {
        $this->assertEquals($expected, $this->calculator->add($firstNumber, $secondNumber));
    }


    /**
     * @dataProvider numbersProvider
     * @return void
     * */
    public function testSubtract($secondNumber, $expected, $firstNumber)
    {
        $this->assertEquals($expected, $this->calculator->subtract($firstNumber, $secondNumber));
    }



    public static function numbersProvider(): array
    {
        return [
            [2.5, 3.5, 6],
        ];
    }



}
<?php

namespace Class;

class Calculator
{

    public function add(float|int $firstNumber, float|int $secondNumber): float|int
    {
        return $firstNumber + $secondNumber;
    }

    public function subtract(float|int $firstNumber, float|int $secondNumber): float|int
    {
        return $firstNumber - $secondNumber;
    }

}
<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    private $calc;

    public function setUp()
    {
        $this->calc = new Calculadora;
    }

    public function numeros()
    {
        return [
            [2, 3, 5],
            [2, 3, 5],
            [2, 3, 5],
            [2, 3, 5],
            [2, 3, 5],
        ];
    }

    /**
     * @dataProvider numeros
     */
    public function test_sumar($x, $y, $result)
    {
        $this->assertEquals($result, $this->calc->sumar($x, $y));
    }

    public function test_restar()
    {
        $this->assertEquals(1, $this->calc->restar(3, 2));
    }

}
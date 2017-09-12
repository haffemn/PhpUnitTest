<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalculatorTest
 *
 * @author Marianne Nielsen
 * @date 12-09-2017
 */
require 'Calculator.php';

class CalculatorTests {

    private $calculator;

    protected function setUp() {
        $this->calculator = new Calculator();
    }

    protected function tearDown() {
        $this->calculator = NULL;
    }

    public function testAdd() {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

}

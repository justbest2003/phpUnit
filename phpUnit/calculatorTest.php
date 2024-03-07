<?php
include "Calculator.php";

use PHPUnit\Framework\Testcase;

class calculatorTest extends Testcase {
    private $calculate;

    public function setUp():void {
        $this->calculate = new Calculator();
    }
    public function testMultiply():void {
        $this->assertEquals(4,$this->calculate->multiply(4,1));
    }
    public function testAdd():void {
        $this->assertEquals(5,$this->calculate->add(4,1));
    }
    public function testSubtract():void {
        $this->assertEquals(3,$this->calculate->subtract(4,1));
    }

}
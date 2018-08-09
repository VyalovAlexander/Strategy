<?php
/**
 * Created by PhpStorm.
 * User: vyalov
 * Date: 09.08.18
 * Time: 21:21
 */

use PHPUnit\Framework\TestCase;
use VyalovAlexander\Strategy\Calculator;

final class CalculatorTest extends TestCase
{

    public function testPlusTwoNumbers(): void {
        $sum = new Calculator('+');
        $a = 35;
        $b = 7;
        $this->assertEquals(42, $sum->calc($a, $b));
    }

    public function testSubsTwoNumbers(): void {
        $sum = new Calculator('-');
        $a = 35;
        $b = 7;
        $this->assertEquals(28, $sum->calc($a, $b));
    }

    public function testMultiTwoNumbers(): void {
        $sum = new Calculator('*');
        $a = 6;
        $b = 7;
        $this->assertEquals(42, $sum->calc($a, $b));
    }

    public function testDivsTwoNumbers(): void {
        $sum = new Calculator('/');
        $a = 10;
        $b = 5;
        $this->assertEquals(2, $sum->calc($a, $b));
    }

    public function testDivsZeroTwoNumbers(): void {
        $sum = new Calculator('/');
        $a = 10;
        $b = 0;
        $this->expectException(Exception::class);
        $sum->calc($a, $b);
    }
}
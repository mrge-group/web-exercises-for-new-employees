<?php

namespace Tests\Unit;

use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest
 * @package Tests\Unit
 * @group FizzBuzzTest
 */
class FizzBuzzTest extends TestCase
{

    public function testGetSpecific()
    {
        $this->assertEquals(1, FizzBuzz::getSpecific(1));
        $this->assertEquals(2, FizzBuzz::getSpecific(2));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(3));
        $this->assertEquals(4, FizzBuzz::getSpecific(4));
        $this->assertEquals('Buzz', FizzBuzz::getSpecific(5));
        $this->assertEquals(8, FizzBuzz::getSpecific(8));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(9));
        $this->assertEquals('Buzz', FizzBuzz::getSpecific(10));
        $this->assertEquals(11, FizzBuzz::getSpecific(11));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(12));
        $this->assertEquals(14, FizzBuzz::getSpecific(14));
        $this->assertEquals('FizzBuzz', FizzBuzz::getSpecific(15));
        $this->assertEquals(16, FizzBuzz::getSpecific(16));
        $this->assertEquals(19, FizzBuzz::getSpecific(19));
        $this->assertEquals('Buzz', FizzBuzz::getSpecific(20));
        $this->assertEquals('Fizz', FizzBuzz::getSpecific(21));
        $this->assertEquals(22, FizzBuzz::getSpecific(22));
        $this->assertEquals('FizzBuzz', FizzBuzz::getSpecific(45));
        $this->assertEquals(49, FizzBuzz::getSpecific(49));
        $this->assertEquals('Buzz', FizzBuzz::getSpecific(50));
        $this->assertEquals('Buzz', FizzBuzz::getSpecific(55));
    }

    public function testGetRange()
    {
        $this->assertEquals(
            ['1234', 'Buzz', 'Fizz', '1237', '1238', 'Fizz', 'Buzz', '1241', 'Fizz', '1243'],
            FizzBuzz::getRange(1234, 1243)
        );

        $this->assertEquals(
            ['Fizz', '44', '46', 'Fizz', 'Buzz', '52', 'Fizz', '56', '58', 'FizzBuzz', '62', '64', 'Fizz', '68'],
            FizzBuzz::getRange(42, 69, 2)
        );

        $this->assertEquals(
            ['1312', '1316', 'FizzBuzz', '1324', '1328', 'Fizz', '1336'],
            FizzBuzz::getRange(1312, 1337, 4)
        );
    }
}

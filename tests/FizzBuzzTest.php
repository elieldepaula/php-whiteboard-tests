<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Excercises\FizzBuzz;

class FizzBuzzTest extends TestCase {

    public function testMaxCharSuccess()
    {

        $expected = [1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz', 16, 17];

        $classe = new FizzBuzz();
        $this->assertEquals($classe->execute(17), $expected);
    }

    public function testMaxCharError()
    {
        $classe = new FizzBuzz();
        $this->expectException(\ArgumentCountError::class);
        $classe->execute();
    }

}
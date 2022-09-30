<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Excercises\MaxChar;

class MaxCharTest extends TestCase {

    public function testMaxCharSuccess()
    {
        $classe = new MaxChar();
        $this->assertEquals($classe->execute("Hello There!"), "e");
    }

    public function testMaxCharError()
    {
        $classe = new MaxChar();
        $this->expectException(\ArgumentCountError::class);
        $classe->execute();
    }

}
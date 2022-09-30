<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Excercises\ArrayChunck;

class ArrayChunkTest extends TestCase {

    public function testMaxChar1Success()
    {

        $expected = [
            [1, 2], 
            [3, 4], 
            [5]
        ];

        $classe = new ArrayChunck();
        $this->assertEquals($classe->execute_1([1, 2, 3, 4, 5], 2), $expected);
    }

    public function testMaxChar2Success()
    {

        $expected = [
            [1, 2], 
            [3, 4], 
            [5]
        ];

        $classe = new ArrayChunck();
        $this->assertEquals($classe->execute_2([1, 2, 3, 4, 5], 2), $expected);
    }

    public function testMaxChar3Success()
    {

        $expected = [
            [1, 2], 
            [3, 4], 
            [5]
        ];

        $classe = new ArrayChunck();
        $this->assertEquals($classe->execute_3([1, 2, 3, 4, 5], 2), $expected);
    }

    public function testMaxCharError()
    {
        $classe = new ArrayChunck();
        $this->expectException(\ArgumentCountError::class);
        $classe->execute_1();
    }

}
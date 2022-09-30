<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Excercises\ReverseInt;

class ReverseIntTest extends TestCase {

    public function testReverseSuccess()
    {
        $classe = new ReverseInt();
        $this->assertEquals($classe->execute(12345), 54321);
    }

}
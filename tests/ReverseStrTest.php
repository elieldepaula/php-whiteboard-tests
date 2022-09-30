<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Excercises\ReverseString;

class ReverseStrTest extends TestCase {

    public function testReverseStrSuccess()
    {
        $classe = new ReverseString();
        $this->assertEquals($classe->execute("My string"), "gnirts yM");
    }

}
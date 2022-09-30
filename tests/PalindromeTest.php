<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Excercises\Palindrome;

class PalindromeTest extends TestCase {

    public function testPalindromeSuccess()
    {
        $classe = new Palindrome();
        $this->assertTrue($classe->execute("ana"));
    }

    public function testpalindromeError()
    {
        $classe = new Palindrome();
        $this->assertFalse($classe->execute("Something"));
    }

}
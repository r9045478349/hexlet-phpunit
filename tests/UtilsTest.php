<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;
use function Hexlet\Phpunit\Utils\reverseString;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }

    public function testReverseWithSpaces(): void
    {
        $this->assertEquals('eyb doog', reverseString('good bye'));
        $this->assertEquals('?uoy era woh', reverseString('how are you?'));
    }
}

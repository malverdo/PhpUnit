<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testEmpty(): array
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }


    public function testPush(): array
    {
        $testEmpty = $this->testEmpty();
        $testEmpty[] = 'foo';
        $this->assertSame('foo', $testEmpty[count($testEmpty)-1]);
        $this->assertNotEmpty($testEmpty);

        return $testEmpty;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}
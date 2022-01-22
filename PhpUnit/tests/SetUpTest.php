<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class SetUpTest extends TestCase
{
    protected $stack;

    protected function setUp(): void
    {
        $this->stack = [];
    }

    protected function tearDown(): void
    {
        unset($this->stack);
    }

    public function testEmpty(): void
    {
        $this->assertEmpty($this->stack);
    }

    public function testPush(): void
    {
        $this->stack[] = 'foo';
        $this->assertSame('foo', $this->stack[count($this->stack) - 1]);
        $this->assertNotEmpty($this->stack);
    }

    public function testPop(): void
    {
        $this->stack[] = 'foo';
        $this->assertSame('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }
}
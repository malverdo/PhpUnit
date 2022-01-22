<?php

namespace App\Tests\expectOutput;

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->setOutputString();
        print 'bar';
        $getBar = $this->getActualOutput();
    }
    private function setOutputString()
    {
        $this->expectOutputString('bar');

    }
}
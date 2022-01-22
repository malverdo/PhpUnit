<?php

namespace App\Tests;


use PHPUnit\Framework\TestCase;
use LengthException;

class ExceptionTest extends TestCase
{

    public function exceptionLength(){
            if (true) {
                throw new LengthException('Количество символов в пароле () не соответствует требованиям.',250);
            }
    }
    public function testException()
    {
        $this->expectExceptionMessage('Количество символов в пароле () не соответствует требованиям.');
        $this->expectException(LengthException::class);
        $this->expectExceptionCode(250);
        $this->exceptionLength();
    }
}
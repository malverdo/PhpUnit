<?php

namespace App\Tests\connectBase;


use PDO;
use PHPUnit\Framework\TestCase;


class DatabaseTest extends TestCase
{
    protected static $dbh;

    public static function setUpBeforeClass(): void
    {
        self::$dbh = new PDO('pgsql:host=172.17.0.1;port=54321;dbname=test','postgres','root');
    }

    public static function tearDownAfterClass(): void
    {
        self::$dbh = null;
    }

    public function testOne()
    {
        $this->assertSame(1,1);
    }
}
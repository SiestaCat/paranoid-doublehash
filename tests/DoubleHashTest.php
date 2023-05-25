<?php 

use Paranoid\DoubleHash\DoubleHash;
use PHPUnit\Framework\TestCase;

class DoubleHashTest extends TestCase
{
    public function testHash():void
    {
        $this->assertEquals
        (
            DoubleHash::hash('i am paranoid'),
            file_get_contents(__DIR__ . '/../test-hash.txt')
        );
    }
}
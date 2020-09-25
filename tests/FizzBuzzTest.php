<?php

include 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use \com\fizzbuzz\FizzBuzz;

final class FizBuzzTest extends TestCase
{
    public function testParse(): void
    {
        $this->assertEquals(1, FizzBuzz::returnOne());
    }

    public function testParseLine(): void
    {

    }
}
<?php

namespace App\Tests\Service;

use App\Service\DivisionService;
use PHPUnit\Framework\TestCase;
//use \Error\ArithmeticError\DivisionByZeroError;

class DivisionServiceTest extends TestCase
{
    private DivisionService $divisionService;

    protected function setUp() :void
    {
        $this->divisionService = new DivisionService();
    }

    public function testDivision()
    {
        $this->assertEquals(1.0, $this->divisionService->run(2, 2));
    }

    public function testDivisionByZero()
    {
        $this->expectException('DivisionByZeroError');
        $this->divisionService->run(2, 0);
    }
}

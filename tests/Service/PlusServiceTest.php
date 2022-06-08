<?php

namespace App\Tests\Service;

use App\Service\PlusService;
use PHPUnit\Framework\TestCase;

class PlusServiceTest extends TestCase
{

    protected function setUp() :void
    {
        $this->plusService = new PlusService();
    }

    public function testPlus()
    {
        $this->assertEquals(4.0, $this->plusService->run(2, 2));
        $this->assertEquals(-1.0, $this->plusService->run(1, -2));
    }
}

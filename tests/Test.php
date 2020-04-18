<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function setUp() : void
    {
        //
    }

    /** @test */
    public function testSuiteIsWorkingProperly()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function canCreatePackageClass()
    {
        $class = new \Overmise\Packet\Package;

        $this->assertTrue($class != null);
    }
}

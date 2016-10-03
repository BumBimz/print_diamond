<?php
class SpaceLeftTest extends PHPUnit_Framework_TestCase
{
    public function test_A_should_only_one()
    {
        $diamond = new Diamond();
        $this->assertEquals("A", $diamond->create('A'));
    }

}

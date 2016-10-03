<?php
class SpaceLeftTest extends PHPUnit_Framework_TestCase
{
    public function test_A_should_only_one()
    {
        $diamond = new Diamond();
        $this->assertEquals("A\n", $diamond->create('A'));
    }

    public function test_B_should_add_spacebar_of_first_line()
    {
        $diamond = new Diamond();
        $this->assertEquals(" A\nB B\n A\n", $diamond->create('B'));
    }

}

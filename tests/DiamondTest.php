<?php
class SpaceLeftTest extends PHPUnit_Framework_TestCase
{
    public function test_A_should_only_one()
    {
        $diamond = new Diamond();
        $this->assertEquals("A\n", $diamond->create('A'));
    }

    public function test_B_should_repeat_of_second_line()
    {
        $diamond = new Diamond();
        $this->assertEquals("A\nBB\nA\n", $diamond->create('B'));
    }

}

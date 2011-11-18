<?php
class QwertyTest  extends PHPUnit_Framework_TestCase
{
    public function testQwertyArray()
    {
        $a = array();
        $this->assertEquals(0, count($a));
    }
}

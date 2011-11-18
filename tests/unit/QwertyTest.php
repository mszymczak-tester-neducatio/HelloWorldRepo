<?php
class QwertyTest  extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Qwerty::returnQwerty
     */
    public function testQwertyArray()
    {
	$qwerty = new Qwerty();
        $this->assertEquals('qwerty', $qwerty->returnQwerty());
    }

    public function testEmpty()
    {
        $qwerty = new Qwerty();
        $this->assertEquals('', $qwerty->returnEmpty());
    }

}

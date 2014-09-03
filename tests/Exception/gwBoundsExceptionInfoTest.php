<?php
use Gwa\Exception\gwBoundsExceptionInfo;

class gwBoundsExceptionInfoTest extends PHPUnit_Framework_TestCase
{
    public function testFetch()
    {
        $info = new gwBoundsExceptionInfo('apple', array('pear', 'banana'));
        $this->assertEquals('apple MUST BE one of [pear, banana]', $info->fetch());
    }

    public function testFetchSingle()
    {
        $info = new gwBoundsExceptionInfo('apple', 'pear');
        $this->assertEquals('apple MUST BE one of [pear]', $info->fetch());
    }

    public function testFetchNote()
    {
        $info = new gwBoundsExceptionInfo('apple', array('pear', 'banana'), false, 'just a note');
        $this->assertEquals('apple MUST BE one of [pear, banana] (just a note)', $info->fetch());
    }

    public function testFetchIllegalValues()
    {
        $info = new gwBoundsExceptionInfo('pear', array('pear', 'banana'), true);
        $this->assertEquals('pear CANNOT BE one of [pear, banana]', $info->fetch());
    }
}

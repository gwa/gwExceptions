<?php
use Gwa\Exception\gwRangeExceptionInfo;

class gwRangeExceptionInfoTest extends PHPUnit_Framework_TestCase
{
    public function testFetch()
    {
        $info = new gwRangeExceptionInfo(5, 1, 4, 'note');
        $this->assertEquals('5 MUST BE within the range of [1 to 4] (note)', $info->fetch());
    }

    public function testGetMinimum()
    {
        $info = new gwRangeExceptionInfo(5, 1, 4);
        $this->assertEquals(1, $info->getMinimum());
    }

    public function testGetMaximum()
    {
        $info = new gwRangeExceptionInfo(5, 1, 4);
        $this->assertEquals(4, $info->getMaximum());
    }
}

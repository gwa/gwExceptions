<?php
use Gwa\Exception\gwTypeExceptionInfo;

class gwTypeExceptionInfoTest extends PHPUnit_Framework_TestCase
{
    public function testFetch()
    {
        $bool = false;
        $info = new gwTypeExceptionInfo($bool, array('int', 'float'));
        $this->assertEquals('FALSE MUST BE one of the following types [int, float]', $info->fetch());
    }
}

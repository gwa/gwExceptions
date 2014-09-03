<?php
use Gwa\Exception\gwCoreExceptionInfo;

class gwCoreExceptionInfoTest extends PHPUnit_Framework_TestCase
{
    public function testFetchAndGetString()
    {
        $info = new gwCoreExceptionInfo('foo');
        $this->assertEquals('foo', $info->fetch());
        $this->assertEquals('foo', $info->fetchHTML());
        $this->assertEquals('foo', (string) $info);
    }

    public function testGetBoolean()
    {
        $info = new gwCoreExceptionInfo(false);
        $this->assertEquals(false, $info->fetch());
    }

    public function testGetStringAsString()
    {
        $info = new gwCoreExceptionInfo();
        $this->assertEquals('foo', $info->getAsString('foo'));
    }

    public function testGetBooleanAsString()
    {
        $info = new gwCoreExceptionInfo();
        $this->assertEquals('FALSE', $info->getAsString(false));
    }

    public function testGetBooleanAsString2()
    {
        $info = new gwCoreExceptionInfo();
        $this->assertEquals('TRUE', $info->getAsString(true));
    }

    public function testGetNullAsString()
    {
        $info = new gwCoreExceptionInfo();
        $this->assertEquals('NULL', $info->getAsString(null));
    }

    public function testGetObjectAsString()
    {
        $info = new gwCoreExceptionInfo();
        $this->assertEquals('{stdClass}', $info->getAsString(new \stdClass));
    }

    public function testGetNumberAsString()
    {
        $info = new gwCoreExceptionInfo();
        $this->assertEquals('1', $info->getAsString(1));
    }
}

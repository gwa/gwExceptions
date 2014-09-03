<?php
use Gwa\Exception\gwCoreException;
use Gwa\Exception\gwCoreExceptionInfo;

class gwCoreExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $info = new gwCoreExceptionInfo('foo');
        $exception = new gwCoreException('message', $info, 1);
        $this->assertInstanceOf('Gwa\Exception\gwCoreException', $exception);
    }

    public function testGetInfo()
    {
        $info = new gwCoreExceptionInfo('foo');
        $exception = new gwCoreException('message', $info, 1);
        $this->assertInstanceOf('Gwa\Exception\gwCoreExceptionInfo', $exception->getInfo());
        $this->assertEquals('message', $exception->getMessage());
        $this->assertEquals(1, $exception->getCode());
    }

    public function testSetInfo()
    {
        $exception = new gwCoreException('message');
        $info = new gwCoreExceptionInfo('foo');
        $exception->info = $info;
        $this->assertInstanceOf('Gwa\Exception\gwCoreExceptionInfo', $exception->getInfo());
        $this->assertEquals('message', $exception->getMessage());
        $this->assertEquals(0, $exception->getCode());
    }

    public function testGet()
    {
        $exception = new gwCoreException('message');
        $info = new gwCoreExceptionInfo('foo');
        $exception->info = $info;
        $this->assertSame($info, $exception->info);
        $this->assertNull($exception->foo);
    }

    public function testToString()
    {
        $info = new gwCoreExceptionInfo('foo');
        $exception = new gwCoreException('message', $info, 1);
        $this->assertEquals('Gwa\Exception\gwCoreException [1]: message | foo', (string) $exception);
    }
}

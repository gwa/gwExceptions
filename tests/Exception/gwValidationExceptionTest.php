<?php
use Gwa\Exception\gwValidationException;

class gwValidationExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $exception = new gwValidationException();
        $this->assertEquals(gwValidationException::INVALID, $exception->getMessage());
        $this->assertEquals(0, $exception->getCode());
    }

    public function testGetError()
    {
        $exception = new gwValidationException();
        $this->assertFalse($exception->hasErrors());
        $exception->appendError('foo', 'a');
        $exception->appendError('foo', 'b');
        $exception->appendError('fop', 'c');
        $this->assertTrue($exception->hasErrors());

        $messages = $exception->getMessages();
        $this->assertEquals(3, count($messages));
        $this->assertTrue(in_array('a', $messages));
        $this->assertTrue(in_array('b', $messages));
        $this->assertTrue(in_array('c', $messages));

        $messages = $exception->getMessagesForFieldname('foo');
        $this->assertEquals(2, count($messages));
        $this->assertTrue(in_array('a', $messages));
        $this->assertTrue(in_array('b', $messages));
        $this->assertFalse(in_array('c', $messages));
    }
}

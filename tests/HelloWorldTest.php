<?php

// backward compatibility
if (! class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

/**
 * Class HelloWorldTest.
 */
class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testHelloWorld()
    {
        $this->assertEquals('Hello World', 'Hello World');
    }
}

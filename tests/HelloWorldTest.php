<?php

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

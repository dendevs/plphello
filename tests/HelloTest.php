<?php
use DenDev\Plphello\Hello;

class HelloTest extends PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Hello();
		$this->assertInstanceOf( "DenDev\Plphello\Hello", $object );
	}

	public function test_hello()
	{
		$object = new Hello();
		$this->assertStringStartsWith( 'hello', $object->hello() );
	}
}


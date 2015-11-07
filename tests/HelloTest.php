<?php
use DenDev\Plphello\Hello;

class HelloTest extends PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Hello( false, array() );
		$this->assertInstanceOf( "DenDev\Plphello\Hello", $object );
	}

	public function test_hello()
	{
		$object = new Hello( false, array() );
		$this->assertStringStartsWith( 'hello', $object->hello() );
	}

	public function test_hello_name()
	{
		$object = new Hello( false, array( 'name' => 'moi' ) );
		$this->assertStringStartsWith( 'hello Moi', $object->hello_name() );
	}
}


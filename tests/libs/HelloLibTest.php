<?php
use DenDev\Plphello\Lib\HelloLib;


class HelloLibTest extends PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new HelloLib();
		$this->assertInstanceOf( 'DenDev\Plphello\Lib\HelloLib', $object );
	}

	public function test_get_name()
	{
		$object = new HelloLib();
        $this->assertInternalType('string', $object->get_name() );
	}
}


<?php
namespace DenDev\Plphello\Test;
use DenDev\Plphello\Hello;


class HelloTest extends \PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Hello();
		$this->assertInstanceOf( "DenDev\Plphello\Hello", $object );
	}

	public function test_get_config()
	{
		$object = new Hello();
		$this->assertContains( '/', $object->get_config_value( 'root_path' ) );
		$this->assertContains( '/logs/', $object->get_config_value( 'log_path' ) );
		$this->assertContains( '/configs/', $object->get_config_value( 'config_path' ) );
		$config_path = $object->get_config_value( 'config_path' );

		$object = new Hello( false, $config_path . 'default.php' );
		$this->assertContains( '/configs/', $object->get_config_value( 'config_path' ) );
		$this->assertContains( 'Moi', $object->get_config_value( 'name' ) );
	}

	public function test_get_service()
	{
		$object = new Hello();
		$this->assertFalse( $object->get_service( 'jkljkl' ) );
	}

	public function test_write_log()
	{
		$object = new Hello();
		$this->assertEquals( 2, $object->write_log( 'test', 'test ecriture log', 'warning', array( 'test' => 'valeur' ) ) );
	}

	public function test_hello()
	{
		$object = new Hello();
		$this->assertStringStartsWith( 'hello', $object->hello() );
	}

	public function test_hello_name()
	{
		$object = new Hello( false, dirname( __FILE__ ) . '/../configs/default.php' );
		$this->assertEquals( 'hello Moi', $object->hello_name() );
	}
}


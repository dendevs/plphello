<?php
namespace DenDev\Plphello\Test;
use DenDev\Plphello\Relationship;


class RelationshipTest extends \PHPUnit_Framework_TestCase 
{
	public function test_instanciate()
	{
		$object = new Relationship( false, false );
		$this->assertInstanceOf( "DenDev\Plphello\Relationship", $object );
	}

	public function test_get_service()
	{
		$object = new Relationship( false, false );
		$this->assertFalse( $object->get_service( 'noexist' ) );
	}

	public function test_write_log()
	{
		$object = new Relationship( false, false );
		$this->assertEquals( 2, $object->write_log( 'test', 'test ecriture log', 'warning', array( 'test' => 'valeur' ) ) );
	}
}

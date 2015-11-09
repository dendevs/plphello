<?php
namespace DenDev\Plphello;
use DenDev\Plphello\Relationship;
use DenDev\Plphello\HelloInterface;
use DenDev\Plphello\Lib\HelloLib;


// TODO extends parent who make config and krl attributes, its all and abstract class def
// encapsublate get_service to manage case when krl is false?

// log is krl and get service logger else echo msg
class Hello extends Relationship implements HelloInterface
{
    private $_hello_lib;


    public function __construct( $krl = false, $config = false )
    {
        parent::__construct( $krl, $config );
        $this->_hello_lib = new HelloLib( $krl, $config );
    }

    public function hello()
    {
        return 'hello ' . $this->_hello_lib->get_name();
    }

    public function hello_name()
    {
        return 'hello ' . $this->_hello_lib->get_personal_name( $this->_config->get_value( 'name' ) );
    }
}

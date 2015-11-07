<?php
namespace DenDev\Plphello;
use DenDev\Plphello\Lib\HelloLib;


class Hello
{
    private $_hello_lib;
    private $_config;


    public function __construct( $krl, $config )
    {
        $this->_hello_lib = new HelloLib();
        $this->_config = $config;
    }

    public function hello()
    {
        return "hello " . $this->_hello_lib->get_name();
    }

    public function hello_name()
    {
        return "hello " . $this->_hello_lib->get_personal_name( $this->_config['name'] );
    }
}

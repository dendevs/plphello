<?php
namespace DenDev\Plphello\Lib;
use DenDev\Plpadaptability\Adaptability;


class HelloLib extends Adaptability
{
    private $_generator;


    public function __construct( $krl = false, $config = false )
    {
        parent::__construct( $krl, $config );
        $this->_generator = new \Nubs\RandomNameGenerator\Vgng();
        $this->_krl->log( 'logname', 'message', 'debug', array() );
    }

    public function get_name()
    {
        return $this->_generator->getName();
    }

    public function get_personal_name( $name )
    {
        return ucfirst( $name );
    }
}



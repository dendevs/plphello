<?php
namespace DenDev\Plphello\Lib;

class HelloLib
{
    private $_generator;


    public function __construct()
    {
        $this->_generator = new \Nubs\RandomNameGenerator\Vgng();
    }

    public function get_name()
    {
        return $this->_generator->getName();
    }
}



<?php
namespace DenDev\Plphello;
use DenDev\Plphello\Lib\HelloLib;


class Hello
{
    private $_hello_lib;


    public function __construct()
    {
        $this->_hello_lib = new HelloLib();
    }

    public function hello()
    {
        return "hello" . $this->_hello_lib->get_name();
    }
}

<?php
namespace DenDev\Plphello;
use DenDev\Plpadaptability\Adaptability;
use DenDev\Plphello\HelloInterface;
use DenDev\Plphello\Lib\HelloLib;


class Hello extends Adaptability implements HelloInterface
{
    private $_hello_lib;


    public function __construct( $krl = false, $config = false )
    {
        parent::__construct( $krl, $config );
        $this->_hello_lib = new HelloLib( $krl, $config );
    }

    protected function _set_default_config()
    {
        $root_path = str_replace('src', '', dirname(__FILE__));
        $root_url = '';
        if(! empty($_SERVER['HTTPS']) && ! empty($_SERVER['HTTP_HOST']) && ! empty($_SERVER['REQUEST_URI']) ) {
            $protocol = ( $_SERVER['HTTPS'] && $_SERVER['HTTPS'] !== 'off' ) ? 'https://' : 'http://';
            $tmp = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $root_url = substr( $tmp, 0, strpos( $tmp, 'src/' ) );
        }
        return array( 
            'root_path' => $root_path,
            'log_path' => $root_path . 'logs/',
            'config_path' => $root_path . 'configs/',
            'assets_path' => $root_path . 'assets/',
            'js_path' => $root_path . 'assets/js/',
            'js_url' => $root_url . 'assets/js/',
            'img_path' => $root_path . 'assets/img/',
            'css_path' => $root_path . 'assets/css/',
        );
    }

    public function hello()
    {
        return 'hello ' . $this->_hello_lib->get_name();
    }

    public function hello_name()
    {
        return 'hello ' . $this->_hello_lib->get_personal_name( $this->get_config_value( 'name' ) );
    }


}

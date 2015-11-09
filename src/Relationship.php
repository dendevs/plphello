<?php 
namespace DenDev\Plphello;
use DenDev\Plphello\Config\Config;


class Relationship
{
	protected $_krl;
	protected $_config;
	protected $_service;


	public function __construct( $krl, $config )
	{
		$this->_set_krl( $krl );
        $this->_set_config( $config );
	}

    public function get_service( $id_service )
    {
        return ( $this->_krl ) ? $this->_krl->get_service( $id_service ) : false;
    }

    public function write_log( $log_name, $message, $level, $extras )
    {
        $service = false;
        if( $service = $this->get_service( 'logger' ) ) // 
        {
            $service->log( $log_name, $message, $level, $extras );
        }
        else
        {
            echo "Service Log pas activé: ecriture dans $log_name : $message ";
        }
    }

    private function _set_krl( $krl )
    {
        if( is_object( $krl ) )
        {
            $this->_krl = $krl;
            $ok = true;
        }
        else
        {
            $this->_krl = new NoKernel();
            $ok = false;
        }

        return $ok;
    }

    private function _set_config( $config )
    {
        $default_config = new Config();

        if( is_object( $config ) ) // need DenDev\Plpkernel\Config\Config but object is good for testing
        {
            // $config->merge_default( $default_config ); // TODO dans kernel
            $this->_config = $config; // TODO merge default & set
            $ok = true;
        }
        else
        {
            $this->_config = $default_config;
            $ok = false;
        }

        return $ok;
    }
}

class NoKernel
{
    public function __call( $name, $args )
    {
        //echo "Appel de la méthode '$name' ". print_r( $args, true ). "\n";
    }
}

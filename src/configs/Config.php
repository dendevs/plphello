<?php
namespace DenDev\Plphello\Config;

class Config
{
	private $_config;

	public function __construct( $values = array() ) 
	{
		$this->_config = $values;
		$this->_set_config();
	}

	public function get_value( $config_name )
	{
		$value = false;

		if( array_key_exists( $config_name, $this->_config ) )
		{
			$value = $this->_config[$config_name];
		}

		return $value;
	}

	public function get_values()
	{
		return $this->_config;
	}

	// -
	private function _set_config()
	{
		$this->_config['name'] = 'moi default';
	}
}

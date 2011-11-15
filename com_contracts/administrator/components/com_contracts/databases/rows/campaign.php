<?php

class ComContractsDatabaseRowCampaign extends KDatabaseRowAbstract
{
	protected $_driver;
	
	public function render_contents($driver)
	{
		$this->_driver = $driver;
		return preg_replace_callback('/{{(.*?)}}/', array($this, '_replace'), $this->description);
	}
	
	public function _replace($match) {
		return $this->_driver->$match[1];
	}
}
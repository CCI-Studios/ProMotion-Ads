<?php
defined('KOOWA') or die;

class ComContractsDatabaseTableCampaign extends KDatabaseTableAbstract
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'filters'	=> array(
				'description'	=> array('html', 'tidy')
			)
		))
		
		parent::_initialize($config);
	}
	
}
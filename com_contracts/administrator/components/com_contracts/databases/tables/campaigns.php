<?php
defined('KOOWA') or die;

class ComContractsDatabaseTableCampaigns extends KDatabaseTableAbstract
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'filters'	=> array(
				'description'	=> array('html', 'tidy')
			)
		));
		
		parent::_initialize($config);
	}
	
}
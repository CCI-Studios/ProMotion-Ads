<?php

class ComContractsDatabaseTableContracts extends KDatabaseTableAbstract
{
	
	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'name'	=> 'contracts_contracts_view',
			'base'	=> 'contracts_contracts'
		));
		
		parent::_initialize($config);
	}
}
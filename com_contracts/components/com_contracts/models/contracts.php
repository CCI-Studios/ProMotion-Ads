<?php

class ComContractsModelContracts extends ComDefaultModelDefault
{
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$query->where('enabled', '=', '1');
		
		return parent::_buildQueryWhere($query);
	}
	
}
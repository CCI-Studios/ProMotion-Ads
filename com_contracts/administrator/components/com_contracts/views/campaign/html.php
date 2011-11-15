<?php

class ComContractsViewCampaignHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$table = $this->getService('com://admin/contracts.database.table.drivers');
		$columns = $table->getColumns();
		
		$variables = array();
		foreach ($columns as $col) {
			if ($col->name !== 'contracts_driver_id')
				$variables[] = $col->name;
		}
		$this->assign('driver_variables', $variables);
		
		return parent::display();
	}
	
}
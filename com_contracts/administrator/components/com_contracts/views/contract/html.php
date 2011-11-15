<?php

class ComContractsViewContractHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		ini_set('display_errors',1); 
		error_reporting(E_ALL);
		
		$contract = $this->getModel()->getItem();
		$driver = $this->getService("com://admin/contracts.model.drivers")
						->set('id', $contract->contracts_driver_id)
						->getItem();
		$this->assign('driver', $driver);
		$campaign = $this->getService("com://admin/contracts.model.campaigns")
						->set('id', $contract->contracts_campaign_id)
						->getItem();
		$this->assign('campaign', $campaign);
		
		return parent::display();
	}
	
}
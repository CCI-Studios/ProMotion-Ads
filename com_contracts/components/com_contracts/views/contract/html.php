<?php

class ComContractsViewContractHtml extends ComDefaultViewHtml
{
	
	public function display()
	{
		$contract = $this->getModel()->getItem();
		$driver = $this->getService('com://site/contracts.model.driver')->set('id', $contract->contracts_driver_id)->getItem();
		$campaign = $this->getService('com://site/contracts.model.campaign')->set('id', $contract->contracts_campaign_id)->getItem();
		
		$this->assign('driver', $driver);
		$this->assign('campaign', $campaign);
		
		return parent::display();
	}
	
	
}
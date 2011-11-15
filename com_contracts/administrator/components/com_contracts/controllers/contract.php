<?php

class ComContractsControllerContract extends ComDefaultControllerDefault
{
	
	protected function _actionEdit(KCommandContext $command)
	{
		$result = parent::_actionEdit($command);
	
		$this->_emailContract();
		
		return $result;
	}
	
	protected function _emailContract()
	{
		$contract = $this->getModel()->getData();
		
		$driver = $this->getService('com://admin/contracts.model.driver')->set('id', $contract->contracts_driver_id)->getItem();
		$campaign = $this->getService('com://admin/contracts.model.campaign')->set('id', $contract->contracts_campaign_id)->getItem();
		$details = $campaign->render_contents($driver);
		$link = '<p>Click <a href="'. JURI::root().'index.php?option=com_contracts&view=contract&id='.$contract->id.'&password='.$contract->password
				.'" target="_blank">here</a> to sign your contract.</p>';
		
		$config =& JFactory::getConfig();
		$mailer =& JFactory::getMailer();
		$mailer->setSender(array($config->getValue('config.mailfrom'),$config->getValue('config.fromname')));
		$mailer->addRecipient($driver->email_address);
		$mailer->setSubject('Contract details for Pro-Motion Ads');
		$mailer->setBody($details . $link);
		$mailer->isHTML(true);
		
		$mailer->send();
	}
	
}
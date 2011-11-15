<?php
defined('KOOWA') or die;

class ComContractsControllerContract extends ComDefaultControllerDefault
{
	
	protected function _actionRead(KCommandContext $context)
	{
	 	$contract = $this->getModel()->getItem();
		
		if (KRequest::get('get.password', 'string') !== $contract->password) {
			JFactory::getApplication()->redirect('/', 'Access Denied. Please use the link in your email to complete your contract', 'error');
		}
		
		return parent::_actionRead($context);
	}
	
	protected function _actionEdit(KCommandContext $context)
	{	
		$data = parent::_actionEdit($context);
		$this->setRedirect('index.php?option=com_contracts&view=contract&layout=thanks');
		return $data;
	}
}
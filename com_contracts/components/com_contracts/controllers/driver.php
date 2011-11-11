<?php

class ComContractsControllerDriver extends ComDefaultControllerDefault
{
	protected function _actionAdd(KCommandContext $context)
	{	
		$data = parent::_actionAdd($context);
		$this->setRedirect('index.php?option=com_contracts&view=driver&layout=thanks');
		return $data;
	}
}
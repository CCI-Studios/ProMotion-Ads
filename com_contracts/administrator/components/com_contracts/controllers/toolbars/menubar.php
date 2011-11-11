<?php
class ComContractsControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
    public function getCommands()
    { 
		$name = $this->getController()->getIdentifier()->name;

        $this->addCommand('Campaigns', array(
        	'href'   => JRoute::_('index.php?option=com_contracts&view=campaigns'),
			'active' => ($name == 'campaign')
        ));
        
        $this->addCommand('Drivers', array(
        	'href' => JRoute::_('index.php?option=com_contracts&view=drivers'),
			'active' => ($name == 'driver')
        ));

		$this->addCommand('Contracts', array(
	    	'href' => JRoute::_('index.php?option=com_contracts&view=contracts'), 
			'active' => ($name == 'contract')
	    ));
        
        $this->addCommand('Advertisers', array(
        	'href' => JRoute::_('index.php?option=com_contracts&view=advertisers'),
			'active' => ($name == 'advertiser')
        ));
         
        return parent::getCommands();
    }
}
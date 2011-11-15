<?php

class ComContractsControllerToolbarCampaigns extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		// Options button.
		$this->addCommand('modal', array(
			'href'		=> 'index.php?option=com_config&view=component&component=com_contracts&path=&tmpl=component',
			'width'		=> 875,
			'height'	=> 550,
			'icon'		=> 'icon-32-options',
			'label'		=> 'Options'
		));
		
		return parent::getCommands();
	}
	
}
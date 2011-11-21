<?php

class ComContractsControllerToolbarContract extends ComDefaultControllerToolbarDefault
{
	
	public function getCommands()
	{
		$this->reset()
			->addCommand('sendContract')
			->addSeparator()
			->addSave()
			->addApply()
			->addCancel();
		
		return parent::getCommands();
	}
	
	public function _commandSendContract(KControllerToolbarCommand $command)
	{
		$command->label = "Send Contract";
		$command->icon = "icon-32-featured";
		$command->append(array(
			'attribs' => array(
				'data-action'	=> 'sendContract',
			)
		));
	}
}
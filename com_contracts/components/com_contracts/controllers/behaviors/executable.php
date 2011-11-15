<?php

class ComContractsControllerBehaviorExecutable extends ComDefaultControllerBehaviorExecutable
{
	
	public function canAdd()
	{
		if (in_array($this->getMixer()->getIdentifier()->name, array('driver'))) {
			return true;
		} else {
			return parent::canAdd();
		}
	}
	
	public function canEdit()
	{
		if (in_array($this->getMixer()->getIdentifier()->name, array('contract'))) {
			return true;
		} else {
			return parent::canEdit();
		}
	}	
}
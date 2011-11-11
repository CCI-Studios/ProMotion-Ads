<?php

class ComContractsControllerBehaviorExecutable extends ComDefaultControllerBehaviorExecutable
{
	
	public function canAdd()
	{
		if ($this->getMixer()->getIdentifier()->name == 'driver') {
			return true;
		} else {
			return parent::getAdd();
		}
	}
	
}
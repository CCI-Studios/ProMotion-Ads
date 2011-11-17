<?php

class ComContractsDatabaseRowContract extends KDatabaseRowDefault
{
	public function save()
	{
		if ($this->password === '') {
			$this->password = $this->_randomPassword();
		}
				
		return parent::save();
	}
	
	protected function _randomPassword($length = 8)
	{
		$password = "";
		$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
		$maxlength = strlen($possible);

		if ($length > $maxlength) {
			$length = $maxlength;
		}

		$i = 0; 
		while ($i < $length) { 
			$char = substr($possible, mt_rand(0, $maxlength-1), 1);
			
			if (!strstr($password, $char)) { 
				$password .= $char;
				$i++;
			}
		}

		return $password;
	}
	
}
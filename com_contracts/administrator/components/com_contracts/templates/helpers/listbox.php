<?php

class ComContractsTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{
	
	public function campaigns($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'campaigns',
			'name'		=> 'contracts_campaign_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'	=> '- Select Campaign -'
		));
		
		return parent::_listbox($config);
	}
	
	public function drivers($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'drivers',
			'name'		=> 'contracts_driver_id',
			'value'		=> 'id',
			'text'		=> 'name',
			'prompt'	=> '- Select Driver -'
		));
		
		return parent::_listbox($config);
	}
	
}
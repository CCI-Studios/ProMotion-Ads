<?php

class ComContractsControllerAdvertiser extends ComDefaultControllerDefault
{
	protected function _actionAdd(KCommandContext $context)
	{	
		$data = parent::_actionAdd($context);
		$this->_emailAdmin($data);
		$this->setRedirect('index.php?option=com_contracts&view=advertiser&layout=thanks');
		return $data;
	}
	
	protected function _emailAdmin($data)
	{
		$params = &JComponentHelper::getParams('com_contracts');
		$email = $params->get('notification_email');
		
		$subject = "New Advertiser Questionnaire Submitted";
		$body = "Personal Details\n\n".
			"Company: {$data->title}\n".
			"Address: {$data->address}\n".
			"Work Phone Number: {$data->work_phone}\n".
			"Cell Phone Number: {$data->cell_phone}\n".
			"Email Address: {$data->email_address}\n\n".
			"Advertising Options\n\n".
			"Vehicle Type: {$data->vehicle_details}\n".
			"Vehicle Areas: ".
				($data->both_sides ? 'Both Sides, ' : '').
				($data->rear ? 'Rear, ' : '').
				($data->both ? 'Both Sides and Rear, ' : '').
				"\n".
			"Advertising Duration: ".
				($data->duration == 0 ? '1 Week' : '').
				($data->duration == 1 ? '1 Month' : '').
				($data->duration == 3 ? '3 Month' : '').
				($data->duration == 6 ? '6 Month' : '').
				($data->duration == 12 ? '1 Year+' : '').
				"\n".
			"Other Duration: {$data->duration_other}\n".
			"Other Details: {$data->other_details}\n";

		$config =& JFactory::getConfig();
		$mailer =& JFactory::getMailer();
		$mailer->setSender(array($config->getValue('config.mailfrom'),$config->getValue('config.fromname')));
		$mailer->addRecipient($email);
		$mailer->setSubject($subject);
		$mailer->setBody($body);

		$mailer->send();
	}
}
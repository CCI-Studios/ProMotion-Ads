<?php

class ComContractsControllerDriver extends ComDefaultControllerDefault
{
	protected function _actionAdd(KCommandContext $context)
	{	
		$data = parent::_actionAdd($context);
		$this->_emailAdmin($data);
		$this->setRedirect('index.php?option=com_contracts&view=driver&layout=thanks');
		return $data;
	}

	protected function _emailAdmin($data)
	{
		$params = &JComponentHelper::getParams('com_contracts');
		$email = $params->get('notification_email');

		$subject = "New Driver Questionnaire Submitted";
		$body = "Personal Details\n\n".
			"Name: {$data->name}\n".
			"Over 18: ". ($data->over_18 == 1 ? 'Yes' : 'No'). "\n".
			"Address: {$data->address}\n".
			"City: {$data->city}\n".
			"Postal Code: {$data->postal_code}\n".
			"Work Address: {$data->work_address}\n".
			"Home Phone: {$data->home_phone}\n".
			"Cell Phone: {$data->cell_phone}\n".
			"Work Phone: {$data->work_phone}\n".
			"Email Address: {$data->email_address}\n".
			
			"\nCar Details\n\n".
			"Car Make: {$data->car_make}\n".
			"Car Model: {$data->car_model}\n".
			"Car Year: {$data->car_year}\n".
			"Car Color: {$data->car_color}\n".
			"License Plate Number: {$data->car_license}\n".
			"Damage Details: {$data->damage_details}\n".
			"Vehicle Areas: ".
				($data->ads_both ? 'Both Sides, ' : '').
				($data->ads_read ? 'Rear, ' : '').
				($data->ads_sides_read ? 'Sides and Rear, ' : '').
				($data->ads_wrap ? 'Full Wrap, ' : '').
				"\n".
			
			"\nDriving Details\n\n".
			"Days per week: {$data->driving_days}\n".
			"Average Distance: {$data->driving_distance}\n".
			"Advertising Duration: ".
				($data->advertising_period <= 12 ? "{$data->advertising_period} Months" : '1 Year+').
				"\n".
			"Grocery Store: {$data->groceries}\n".
			"Activities: {$data->activities}\n".
			"Leave the city: {$data->travel}\n".
			
			"\nOther Details\n\n".
			"Criminal: ". ($data->criminal == 0 ? 'No' : 'Yes'). "\n".
			"License: ". ($data->valid_license == 0 ? 'No' : 'Yes'). "\n".
			"Promo Code: {$data->promo_code}\n".
			"Referral: {$data->referral}\n";
			

		$config =& JFactory::getConfig();
		$mailer =& JFactory::getMailer();
		$mailer->setSender(array(
				$config->getValue('config.mailfrom'),
				$config->getValue('config.fromname')));
		$mailer->addRecipient($email);
		$mailer->setSubject($subject);
		$mailer->setBody($body);

		$mailer->send();
	}
}
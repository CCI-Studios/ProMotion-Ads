<?php defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.mootools') ?>
<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<h1>Pro Motion Ads Advertiser Questionnarie</h1>

<form action="<?= @route('id='. $advertiser->id)?>" method="post" class="-koowa-form">
	<fieldset>
		<legend><?= @text('Personal Details') ?></legend>
		
		<div>
			<label>Company:</label><br>
			<input type="text" name="title" value="<?= $advertiser->title ?>" class="required" />
		</div>
		
		<div>
			<label>Address:</label><br>
			<input type="text" name="address" value="<?= $advertiser->address ?>" class="required" />
		</div>
		
		<div>
			<label>Work Phone Number:</label><br>
			<input type="text" name="work_phone" value="<?= $advertiser->work_phone ?>" />
		</div>
		
		<div>
			<label>Cell Phone Number:</label><br>
			<input type="text" name="cell_phone" value="<?= $advertiser->cell_phone ?>" />
		</div>
		
		<div>
			<label>Email Address:</label><br>
			<input type="text" name="email_address" value="<?= $advertiser->email_address ?>" class="required" />
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Advertising Options</legend>
		<div>
			<label>What type of vehicles would you prefer to be advertising on (colour, make and year):</label><br>
			<textarea name="vehicle_details" cols="40" rows="10"><?= $advertiser->vehicle_details ?></textarea>
		</div>
		
		<div>
			<label>What area of the vehicle do you want to advertise on?:</label><br>
			<label>
				<input type="hidden" name="both_sides" value="0" />
				<input type="checkbox" name="both_sides" value="1" />
				Both sides
			</label>
			<label>
				<input type="hidden" name="rear" value="0" />
				<input type="checkbox" name="rear" value="1" />
				The Rear
			</label>
			<label>
				<input type="hidden" name="both" value="0" />
				<input type="checkbox" name="both" value="1" />
				The sides and rear
			</label>
		</div>
		
		<div>
			<label>What period of time are you willing to advertise for:</label><br>
			<select name="duration">
				<option value="0">1 Week</option>
				<option value="1">1 Month</option>
				<option value="3">3 Months</option>
				<option value="6">6 Months</option>
				<option value="12">1 Year+</option>
			</select>
		</div>
		
		<div>
			<label>Other; please elaborate the desired time:</label><br>
			<input type="text" name="duration_other" value="<?= $advertiser->duration_other ?>" />
		</div>
		
		<div>
			<label>If there is any other information you would like to provide about your desired preferences (Driver, vehicle, etc), please state here:</label>
			<textarea name="other_details" cols="40" rows="10"><?= $advertiser->other_details ?></textarea>
	</fieldset>
		

	
	<fieldset>
		<div>
			By submitting this, you are confirming that all information given is up to date and correct.<br>
			<button>Send</button>
		</div>
	</fieldset>
</form>
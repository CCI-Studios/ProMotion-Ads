<?php defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<h1>Driver Questionnaire</h1>

<form action="<?= @route('id='. $driver->id)?>" method="post" class="-koowa-form">
	<fieldset>
		<legend><?= @text('Personal Details') ?></legend>
		
		<div>
			<label>Name:</label><br>
			<input type="text" name="name" value="<?= $driver->name ?>" class="required" />
		</div>
		
		<div>
			<label>Are you over the age of 18:</label><br>
			<select name="over_18">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
		</div>
		
		<div>
			<label>Address:</label><br>
			<input type="text" name="address" value="<?= $driver->address ?>" class="required" />
		</div>
		
		<div>
			<label>City:</label><br>
			<input type="text" name="city" value="<?= $driver->city ?>" class="required" />
		</div>
		
		<div>
			<label>Postal Code:</label><br>
			<input type="text" name="postal_code" value="<?= $driver->postal_code ?>" class="required" />
		</div>
		
		<div>
			<label>Work Address:</label><br>
			<input type="text" name="work_address" value="<?= $driver->work_address ?>" class="required" />
		</div>
		
		<div>
			<label>Home Phone:</label><br>
			<input type="text" name="home_phone" value="<?= $driver->home_phone ?>" class="required" />
		</div>
		
		<div>
			<label>Cell Phone:</label><br>
			<input type="text" name="cell_phone" value="<?= $driver->cell_phone ?>" class="required" />
		</div>
		
		<div>
			<label>Work Phone:</label><br>
			<input type="text" name="work_phone" value="<?= $driver->work_phone ?>" class="required" />
		</div>
		
		<div>
			<label>Email Address:</label><br>
			<input type="text" name="email_address" value="<?= $driver->email_address ?>" class="required" />
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Car Details</legend>
		
		<div>
			<label>Car Make:</label><br>
			<input type="text" name="car_make" value="<?= $driver->car_make ?>" class="required" />
		</div>
		
		<div>
			<label>Car Model:</label><br>
			<input type="text" name="car_model" value="<?= $driver->car_model ?>" class="required" />
		</div>
		
		<div>
			<label>Car Year:</label><br>
			<input type="text" name="car_year" value="<?= $driver->car_year ?>" class="required" />
		</div>
		
		<div>
			<label>Car Color:</label><br>
			<input type="text" name="car_color" value="<?= $driver->car_color ?>" class="required" />
		</div>
		
		<div>
			<label>License Plate Number:</label><br>
			<input type="text" name="car_license" value="<?= $driver->car_license ?>" class="required" />
		</div>
		
		<div>
			<label>Is your vehical damaged on the exterior, if so please elaborate:</label><br>
			<input type="text" name="damage_details" value="<?= $driver->damage_details ?>" class="required" />
		</div>
		
		<div>
			<label>What area of the vehicle do you want to advertise on:</label><br>
			<label>
				<input type="hidden" name="ads_both" value="0" />
				<input type="checkbox" name="ads_both" value="1" />
				Both sides
			</label>
			<label>
				<input type="hidden" name="ads_read" value="0" />
				<input type="checkbox" name="ads_read" value="1" />
				The rear
			</label>
			<label>
				<input type="hidden" name="ads_sides_read" value="0" />
				<input type="checkbox" name="ads_sides_read" value="1" />
				The sides and rear
			</label>
			<label>
				<input type="hidden" name="ads_wrap" value="0" />
				<input type="checkbox" name="ads_wrap" value="1" />
				Full wrap
			</label>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Driving Details</legend>
		
		<div>
			<label>How many days a week do you drive:</label><br>
			<input type="text" name="driving_days" value="<?= $driver->driving_days ?>" class="required" />
		</div>
		
		<div>
			<label>What distance do you drive on average:</label><br>
			<input type="text" name="driving_distance" value="<?= $driver->driving_distance ?>" class="required" />
		</div>
		
		<div>
			<label>What period of time are you willing to advertise for:</label><br>
			<select name="advertising_period">
				<option value="1">1 Month</option>
				<option value="2">2 Months</option>
				<option value="3">3 Months</option>
				<option value="4">4 Months</option>
				<option value="5">5 Months</option>
				<option value="6">6 Months</option>
				<option value="7">7 Months</option>
				<option value="8">8 Months</option>
				<option value="9">9 Months</option>
				<option value="10">10 Months</option>
				<option value="11">11 Months</option>
				<option value="12">12 Months</option>
				<option value="13">1 Year+</option>
			</select>
		</div>
		
		<div>
			<label>What grocery store do you go to most:</label><br>
			<input type="text" name="groceries" value="<?= $driver->groceries ?>" class="required" />
		</div>
		
		<div>
			<label>What activities (sports, theatre) do you, or your children, do:</label><br>
			<input type="text" name="activities" value="<?= $driver->activities ?>" class="required" />
		</div>
		
		<div>
			<label>Do you often leave the city and if so, where to? (Business trips, vacation, sporting activities, etc):</label><br>
			<input type="text" name="travel" value="<?= $driver->travel ?>" class="required" />
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Other Details</legend>
		
		<div>
			<label>Do you have a criminal record of which you do not have a pardon for:</label><br>
			<select name="criminal">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
		</div>
		
		<div>
			<label>Do you have a valid driver's license and liability insurance:</label><br>
			<select name="valid_license">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
		</div>
		
		<div>
			<label>Promotional code:</label><br>
			<input type="text" name="promo_code" value="<?= $driver->promo_code ?>" class="required" />
		</div>
		
		<div>
			<label>How did you hear about Pro Motion Ads?:</label><br>
			<input type="text" name="referral" value="<?= $driver->referral ?>" class="required" />
		</div>
	</fieldset>
	
	<fieldset>
		<div>
			By submitting this, you are confirming that all information given is up to date and correct.<br>
			<button>Send</button>
		</div>
	</fieldset>
</form>
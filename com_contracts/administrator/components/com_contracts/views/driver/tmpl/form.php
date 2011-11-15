<? defined('KOOWA') or die('Restricted access'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<form action="<?= @route('id='. $driver->id) ?>" method="post" class="-koowa-form" id="edit-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Driver Contact Information</legend>
			
			<ul class="adminformlist">
				<li>
					<label><?= @text('Name') ?>:</label>
					<input class="readonly" type="text" name="name" value="<?= $driver->name ?>" />
				</li>
				<li>
					<label><?= @text('Over 18') ?>:</label>
					<input class="readonly" type="text" name="over_18" value="<?= $driver->over_18 ?>" />
				</li>
				<li>
					<label><?= @text('Address') ?>:</label>
					<input class="readonly" type="text" name="address" value="<?= $driver->address ?>" />
				</li>
				<li>
					<label><?= @text('City') ?>:</label>
					<input class="readonly" type="text" name="city" value="<?= $driver->city ?>" />
				</li>
				<li>
					<label><?= @text('Postal Code') ?>:</label>
					<input class="readonly" type="text" name="postal_code" value="<?= $driver->postal_code ?>" />
				</li>
				<li>
					<label><?= @text('Work Address') ?>:</label>
					<input class="readonly" type="text" name="work_address" value="<?= $driver->work_address ?>" />
				</li>
				<li>
					<label><?= @text('Home Phone') ?>:</label>
					<input class="readonly" type="text" name="home_phone" value="<?= $driver->home_phone ?>" />
				</li>
				<li>
					<label><?= @text('Cell phone') ?>:</label>
					<input class="readonly" type="text" name="cell_phone" value="<?= $driver->cell_phone ?>" />
				</li>
				<li>
					<label><?= @text('Work Phone') ?>:</label>
					<input class="readonly" type="text" name="work_phone" value="<?= $driver->work_phone ?>" />
				</li>
				<li>
					<label><?= @text('Email Address') ?>:</label>
					<input class="readonly" type="text" name="email_address" value="<?= $driver->email_address ?>" />
				</li>
			</ul>
		</fieldset>
	</div>
</form>
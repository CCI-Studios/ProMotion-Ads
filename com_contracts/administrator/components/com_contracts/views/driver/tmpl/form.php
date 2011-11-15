<? defined('KOOWA') or die('Restricted access'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<form action="<?= @route('id='. $driver->id) ?>" method="post" class="-koowa-form" id="edit-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Driver Contact Information</legend>
			
			<ul class="adminformlist">
				<li>
					<label><?= @text('Name') ?>:</label><Br> <?= $Driver->name ?></li>
				<li>
					<label><?= @text('Over 18') ?>:</label><br> <?= $driver->over_18 ?></li>
				<li>
					<label><?= @text('Address') ?>:</label><br> <?= $driver->address ?></li>
				<li>
					<label><?= @text('City') ?>:</label><br> <?= $driver->city ?></li>
				<li>
					<label><?= @text('Postal Code') ?>:</label><br> <?= $driver->postal_code ?></li>
				<li>
					<label><?= @text('Work Address') ?>:</label><br> <?= $driver->work_address ?></li>
				<li>
					<label><?= @text('Home Phone') ?>:</label><br> <?= $driver->home_phone?></li>
				<li>
					<label><?= @text('Cell phone') ?>:</label><br> <?= $driver->cell_phone ?></li>
				<li>
					<label><?= @text('Work Phone') ?>:</label><br> <?= $driver->work_phone ?></li>
				<li>
					<label><?= @text('Email Address') ?>:</label><br> <?= $driver->email_address ?></li>
			</ul>
		</fieldset>
	</div>
</form>
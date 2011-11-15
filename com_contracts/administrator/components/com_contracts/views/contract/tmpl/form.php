<? defined('KOOWA') or die('Restricted access'); ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<form action="<?= @route('id='. $contract->id) ?>" method="post" class="-koowa-form" id="edit-form">
	<div class="width-40 fltlft">
		<fieldset class="adminform">
			<legend>Contact Information</legend>
			
			<ul class="adminformlist">
				<li>
					<label><?= @text('Campaign') ?>:</label>
					<?= @helper('listbox.campaigns') ?>
				</li>
				<li>
					<label><?= @text('Driver') ?>:</label>
					<?= @helper('listbox.drivers') ?>
				</li>
			</ul>
		</fieldset>
	</div>
	
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Contract Sample</legend>
			<?= $campaign->render_contents($driver); ?>
		</fieldset>
	</div>
</form>
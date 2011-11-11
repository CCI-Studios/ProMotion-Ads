<? defined('KOOWA') or die('Restricted access'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<form action="<?= @route('id='. $campaign->id) ?>" method="post" class="-koowa-form" id="edit-form">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend>Campaign Information</legend>
			
			<ul class="adminformlist">
				<li>
					<label for=""><?= @text('Title') ?>:</label>
					<input type="text" name="title" class="inputbox required" required="required" value="<?= $campaign->title ?>" />
				</li>
			</ul>
			
			<div class="clr"></div>
			
			<label for=""><?= @text('Contract Details') ?></label>
			<div class="clr"></div>
			<?= @editor(array('buttons' => null)) ?>
		</fieldset>
	</div>
</form>
			
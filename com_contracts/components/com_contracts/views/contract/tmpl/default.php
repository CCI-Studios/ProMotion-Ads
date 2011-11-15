<?php defined('KOOWA') or die; ?>
<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>
<script src="media://lib_koowa/js/koowa.js" />

<h1>Contract Details</h1>

<?= $campaign->render_contents($driver); ?>


<form action="<?= @route('id='.$contract->id) ?>" method="post" class="-koowa-form">
	<p>Would you like to accept the terms of the contract?</p>

	<div>
		<select name="signed" style="width: 100px;">
			<option value="1">Accept</option>
			<option value="-1">Decline</option>
		</select>
	</div>
	
	<div>
		<button>Submit</button>
	</div>
</form>
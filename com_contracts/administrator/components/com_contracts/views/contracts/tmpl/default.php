<? defined('KOOWA') or die('Restricted access');?>
<?= @helper('behavior.mootools'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.tooltip');?>
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="25">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column' => 'driver_name', 'title' => 'Driver Name')) ?></th>
				<th><?= @helper('grid.sort', array('column' => 'campaign_title', 'title' => 'Campaign Name')) ?></th>
				<th width="50"><?= @helper('grid.sort', array('column' => 'enabled')) ?></th>
				<th width="50"><?= @helper('grid.sort', array('column' => 'signed'))?></th>
				<th width="25"><?= @text('id') ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="6" align="center">
					<?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach($contracts as $contract): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $contract))?></td>
				<td><a href="<?= @route('view=contract&id='. $contract->id) ?>">
					<?= $contract->driver_name ?>
				</a></td>
				<td><a href="<?= @route('view=contract&id='. $contract->id) ?>">
					<?= $contract->campaign_title ?>
				</a></td>
				<td align="center"><?= @helper('grid.enable', array('row' => $contract)) ?></td>
				<td align="center"><?= ($contract->signed == 1) ? 'Accepted' : (($contract->signed == -1) ? 'Declined' : '-') ?></td>
				<td align="center"><?= $contract->id?></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>
				
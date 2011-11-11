<? defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.tooltip');?>
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th><?= @text('Description') ?></th>
				<th><?= @helper('grid.sort', array('column' => 'campaign_id')) ?></th>
				<th><?= @helper('grid.sort', array('column' => 'driver_id')) ?></th>
				<th><?= @helper('grid.sort', array('column' => 'status')) ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="4" align="center">
					<?= @helper('paginate.pagination', array('total' => $total)) ?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach($contracts as $contract): ?>
			<tr>
				<td><?= $contract->description ?></td>
				<td><?= $contract->campaign_id ?></td>
				<td><?= $contract->driver_id ?></td>
				<td><?= $contract->status ?></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>
				
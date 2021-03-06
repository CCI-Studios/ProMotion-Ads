<? defined('KOOWA') or die('Restricted access');?>
<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.tooltip');?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="25">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column' => 'title'))?>
				<th width="25"><?= @text('id') ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="3" align="center">
					<?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach($campaigns as $campaign): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row' => $campaign)) ?></td>
				<td><a href="<?= @route('view=campaign&id='. $campaign->id)?>">
					<?= $campaign->title ?>
				</a></td>
				<td align="center"><?= $campaign->id ?></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>

<? defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.tooltip');?>
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th><?= @helper('grid.sort', array('column' => 'title'))?>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="4" align="center">
					<?= @helper('paginator.pagination', array('total' => $total)) ?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach($campaigns as $campaign): ?>
			<tr>
				<td><a href="<?= @route('view=campaign&id='. $campaign->id)?>">
					<?= $campaign->title ?>
				</a></td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>

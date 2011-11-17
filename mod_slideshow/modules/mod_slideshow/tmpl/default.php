<div class="mod_slideshow">
	<div class="images">
		<? foreach($images as $image): ?>
			<img src="<?= $image_path . $image ?>" />
		<? endforeach ?>
	</div>
	
	
	<div class="slides">
		<div class="slide"><img src="<?= $image_path . $images[0] ?>" /></div>
		<div class="slide"><img src="<?= $image_path . $images[0] ?>" /></div>
	</div>

	<div class="selector"><div>
		<? foreach($images as $index => $image): ?>
			<div class="<?= $index == 0 ? 'active' : '' ?>"></div>
		<? endforeach ?>
	</div></div>
</div>
window.addEvent('domready', function() {
	var images = $$('img.rollover');
	images.each(function(image) {
		var normal, over;
		normal = image.src;
		over = normal.replace('_normal.', '_over.');
		
		if (normal === over) {
			return;
		}
		
		image.addEvents({
			mouseenter: function() {
				image.src = over;
			},
			mouseleave: function() {
				image.src = normal;
			}
		});
		
		new Asset.image(over);
	});
});
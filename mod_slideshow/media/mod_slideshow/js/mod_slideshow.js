var Slideshow = new Class({
	container: null,
	images: null,
	selectors: null,
	index: null,
	
	delay: 5000,
	duration: 500,
	
	image1: null,
	image2: null,
	
	timer: null,
	running: null,
	
	initialize: function(container) {
		this.container = container
		
		this.images = this.container.getElements('.images img');
		this.selectors = this.container.getElements('.selector div div');
		this.index = 0;
		
		this.image1 = this.container.getElement('.slides .slide:first-child img');
		this.image2 = this.container.getElement('.slides .slide + .slide img');
		
		this.selectors.addEvent('click', function(event) {
			var i = this.selectors.indexOf(event.target);
			
			if (i != -1)
				this.selectImage(i);
		}.bind(this));
		
		this.setImage(this.index);
		this.start();
	},
	
	start: function() {
		this.running = true;
		this.timer = this.next.delay(this.delay, this);
	},
	
	stop: function() {
		
	},
	
	next: function() {
		if (this.index < this.images.length -1) {
			this.index++;
		} else {
			this.index = 0;
		}
			
		this.selectImage(this.index);
	},
	
	selectImage: function(index) {
		if (this.running) {
			clearTimeout(this.timer);
		}
		
		this.image2.src = this.images[index].src;
		this.image2.setStyle('opacity', 0);
		
		var fx = new Fx.Tween(this.image2, {
			property: 'opacity',
			duration: this.duration,
			transition: 'sine:in:out',
			
			onComplete: function() {
				this.setImage(this.index);
				
				if (this.running) {
					this.timer = this.next.delay(this.delay, this);
				} else {
				}
			}.bind(this)
		});
		
		fx.start(1);
	
		this.index = index;
		this.selectors.removeClass('active');
	},
	
	setImage: function(index) {
		this.image1.src = this.images[index].src;
		this.image2.setStyle('opacity', 0);
		this.selectors[this.index].addClass('active');
	}
});

window.addEvent('domready', function() {
	$$('.mod_slideshow').each(function (ss) {
		var slideshow = new Slideshow(ss);
	});
});
jQuery(document).ready(function(){
	// Isotope blog
	var $service_style1 = jQuery('.gallery1');

	jQuery(window).load(function () {
		// Initialize Isotope
	$service_style1.isotope({
			itemSelector: '.wl-gallery'
		});	
	});
});
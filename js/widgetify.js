/**
 * widgetify.js - v1.0.0 - 2019-04-20
 * https://github.com/chigozieorunta/wp-widgetify/js/widgetify.js
 *
 * Copyright (c) 2019 Chigozie Orunta
 * Licensed MIT <https://github.com/chigozieorunta/wp-widgetify/blob/master/LICENSE>
**/

(function($) {
	var imgUrl = '';
	$(document).ready(function() {
		/* Gallery & SlideShow */
		$(".widgetify-gallery").click(function() {
			imgUrl = $(this).children(".unim-img").css("background-image");
			$(".widgetify-slideshow").fadeIn("fast");
			$(".widgetify-slideshow-image").css("background-image", imgUrl);
		})
		$(".widgetify-slideshow").click(function() {
			$(this).fadeOut("fast");
		})
	});
})( jQuery );
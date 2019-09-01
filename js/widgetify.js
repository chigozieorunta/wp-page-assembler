/**
 * pa-gallery - v1.0.0 - 2019-04-20
 * https://github.com/chigozieorunta/wp-page-assembler/js/pa-gallery.js
 *
 * Copyright (c) 2019 Chigozie Orunta
 * Licensed MIT <https://github.com/chigozieorunta/wp-page-assembler/blob/master/LICENSE>
**/

(function($) {
	var imgUrl = '';
	$(document).ready(function() {
		$(".pa-gallery").click(function() {
			imgUrl = $(this).children(".unim-img").css("background-image");
			$(".pa-slideshow").fadeIn("fast");
			$(".pa-slideshow-image").css("background-image", imgUrl);
		})
		$(".pa-slideshow").click(function() {
			$(this).fadeOut("fast");
		})
	});
})( jQuery );

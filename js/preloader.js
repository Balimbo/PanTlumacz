if($(".loader__inner").css("display") == "flex") // Until the page loads, the screen is not allowed to scroll.
	$("body").css({"overflow" : "hidden"});

$(window).on('load', function() { // When the page loads, the preloader disappears with the fade animation, and the screen is allowed to scroll
  $('.loader__inner').fadeOut().end().delay(400).fadeOut('slow');
  $("body").css({"overflow-x" : "hidden", "overflow-y" : "auto"});
});
if($(".loader__inner").css("display") == "flex")
	$("body").css({"overflow" : "hidden"});

$(window).on('load', function() {
  $('.loader__inner').fadeOut().end().delay(400).fadeOut('slow');
  $("body").css({"overflow-x" : "hidden", "overflow-y" : "auto"});
});
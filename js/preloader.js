
if($(".loader__inner").prop("display") == "undefined")
	$("body").css({"overflow" : "hidden"});
console.log($(".loader__inner").prop("display"));
$(window).on('load', function() {
  $('.loader__inner').fadeOut().end().delay(400).fadeOut('slow');
});
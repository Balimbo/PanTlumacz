$(function () {
	let lastCall = 0;
	$("[data-scroll]").click(function (event) {
		event.preventDefault();
		let blockId=$(this).data("scroll");
		let blockOffset = $(blockId).offset().top;

		$("html, body").animate({scrollTop:blockOffset-30},600)
	})




	let temp = $("#nav_toggle").click(function (event) {
		if(Date.now() - lastCall > 500){
		event.preventDefault();

		$("#nav,#nav_toggle").toggleClass("active");
		$(".header_nav").slideToggle("slow");
		lastCall = Date.now();
	}
	});
	
	window.onresize = function( event ) {
		if(document.body.clientWidth >= 930)
			$("#nav").css({"display" : "flex"});
		else if($("#nav_toggle").hasClass("active"))
			$("#nav").css({"display" : "block"});
		else if(!$("#nav_toggle").hasClass("active"))
			$("#nav").css({"display" : "none"});
	};
	
});
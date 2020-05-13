$(function () {
	let lastCall = 0;
	$("[data-scroll]").click(function (event) {
		event.preventDefault();
		let blockId=$(this).data("scroll");
		let blockOffset = $(blockId).offset().top;

		$("html, body").animate({scrollTop:blockOffset-30},600)
	})




	var temp = $("#nav_toggle").click(function (event) {
		if(Date.now() - lastCall > 500){
		event.preventDefault();

		$("#nav,#nav_toggle").toggleClass("active");
		$(".header_nav").slideToggle("slow");
		lastCall = Date.now();
	}
	});
	
});